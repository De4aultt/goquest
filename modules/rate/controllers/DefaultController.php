<?php


namespace app\modules\rate\controllers;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * Default controller for the `rate` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider([
        'query' => User::findBySql('SELECT * FROM user ORDER BY rating DESC LIMIT 10')
            ]);

        $dataProvider->pagination  = false;
        $this->layout = "lavron";
        return $this->render('index', [
        'dataProvider' => $dataProvider,
            ]);
        }
}
