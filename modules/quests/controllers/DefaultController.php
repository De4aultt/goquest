<?php

namespace app\modules\quests\controllers;

use yii\web\Controller;

use Yii;
/**
 * Default controller for the `quests` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $this->layout = "lavron";
        return $this->render('index');
    }
}
