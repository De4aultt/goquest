<?php

namespace app\modules\login\controllers;


use yii\web\Controller;
use app\models\Login;
use app\models\User;

use Yii;


/**
 * Default controller for the `login` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(){
        if(!Yii::$app->user->isGuest){
            return $this->redirect(array('/quests'));
        }
        $login_model = new Login();

        if (Yii::$app->request->post('Login')) {
            $login_model->attributes = Yii::$app->request->post('Login');
            if ($login_model->validate()) {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect(array('/quests'));
            }
        }
        $this->layout = "lavron";
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
        Maxsure your registered email when login same with facebook email*/
   //  die(print_r($attributes));
           
           if(isset($attributes['emails'])){
               //if google----
           $user = User::find()->where(['email'=>$attributes['emails'][0]['value'], 'service' => 'google'])->one();
            
          } else if(isset($attributes['email'])){
             //if fb----
            $user = User::find()->where(['email'=>$attributes['email'], 'service' => 'fb'])->one();
           }
              else {  
             //if vk---
            $user = User::find()->where(['user_id'=>$attributes['user_id'], 'service' => 'vk'])->one();
            
          }
        if(!empty($user)){
            if(isset($attributes['emails'])){

            $user->setAttribute('photo',$attributes['image']['url']);
            $user->update(false,['photo']);
            }else if(isset($attributes['email'])){
             $photo = 'https://graph.facebook.com/'.$attributes['id'].'/picture';
              $user->setAttribute('photo',$photo);
            $user->update(false,['photo']);
             }
              else{
               $user->setAttribute('photo',$attributes['photo']);
               $user->update(false,['photo']);
           }
            Yii::$app->user->login($user);
 
        }else{
           if(isset($attributes['emails'])){
        $user = new User();
        $user->service = 'google' ;
        $user->nickname = $attributes['displayName'];
        $user->name = $attributes['displayName'];
        $user->email = $attributes['emails'][0]['value'];
        $user->photo = $attributes['image']['url'];
        $user->save();
       
            Yii::$app->user->login($user);
    }else if(isset($attributes['email'])){
        $user = new User();
        $user->service = 'fb' ;
        $user->nickname = $attributes['name'];
        $user->name = $attributes['name'];
        $user->email = $attributes['email'];
        $photo = 'https://graph.facebook.com/'.$attributes['id'].'/picture';
        $user->photo = $photo;
        $user->save();
            Yii::$app->user->login($user);

} else{

        $user = new User();
        $user->service = 'vk' ;
        $user->nickname = $attributes['first_name'].' '.$attributes['last_name'];
        $user->name = $attributes['first_name'].' '.$attributes['last_name'];
        $user->user_id = $attributes['user_id'];
        $user->photo =  $attributes['photo'];
        $user->save();
            Yii::$app->user->login($user);
}



            // Save session attribute user from FB
         //   $session = Yii::$app->session;
      //      Yii::$app->session['attributes'] = $attributes;
     //       $session['attributes']=$attributes;
            // redirect to form signup, variabel global set to successUrl
    //        $this->successUrl = \yii\helpers\Url::to(array('/signup'));
    //        return $this->redirect($this->successUrl);
        }
    }

}