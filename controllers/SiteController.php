<?php

namespace app\controllers;

use app\models\User;
use yii\web\Controller;
use app\models\Login;


use Yii;
use yii\filters\AccessControl;



class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex(){

        return $this->redirect(array('/main'));
    }



    public function actionLogout(){
        if(!Yii::$app->user->isGuest){
            Yii::$app->user->logout();
            return $this->redirect(array('/main'));
        }
    }

    public function actionLogin(){
        if(!Yii::$app->user->isGuest){
            return $this->redirect(array('/main'));
        }
        $login_model = new Login();

        if (Yii::$app->request->post('Login')) {
            $login_model->attributes = Yii::$app->request->post('Login');
            if ($login_model->validate()) {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect(array('/main'));
            }
        }

        return $this->render('login', ['login_model' => $login_model]);

    }
    public $successUrl = 'Success';
    public function actions() {
        return [

            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
            ],
        ];
    }


    public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
        // user login or signup comes here
        /*
        Checking facebook email registered yet?
        Maxsure your registered email when login same with facebook email
        die(print_r($attributes));
        */

        $user = User::find()->where(['email'=>$attributes['email']])->one();
        if(!empty($user)){
            Yii::$app->user->login($user);

        }else{
            // Save session attribute user from FB
            $session = Yii::$app->session;
            Yii::$app->session['attributes'] = $attributes;
            $session['attributes']=$attributes;
            // redirect to form signup, variabel global set to successUrl
            $this->successUrl = \yii\helpers\Url::to(['site/signup']);
            return $this->redirect($this->successUrl);
        }
    }


}
