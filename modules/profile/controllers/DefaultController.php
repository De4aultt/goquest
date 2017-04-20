<?php

namespace app\modules\profile\controllers;
use Yii;
use app\models\ChangeForm;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * Default controller for the `profile` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

       if(Yii::$app->user->isGuest){
           return $this->redirect(array('/main'));
       }

        $model = new ChangeForm();
        $this->layout = "lavron";
        return $this->render('index', [
            'model' => $model,
        ]);


    }



}
