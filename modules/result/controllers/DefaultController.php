<?php

namespace app\modules\result\controllers;

use yii\web\Controller;

/**
 * Default controller for the `result` module
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
