<?php

namespace app\modules\signup\controllers;

use yii\web\Controller;
use app\models\Signup;
use Yii;

/**
 * Default controller for the `signup` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(){
        $model = new Signup();
        if(isset($_POST['Signup'])){
            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate() && $model->signup()){
                return $this->redirect(array('/main'));
            }
        }

        return $this->render('signup', ['model'=> $model]);
    }
}
