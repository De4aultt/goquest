<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>


<section class="rating">
    <div class="container">
        <div class="row">

            <table class="bordered" >

                <thead>
                <tr class="first">
                    <h1>Топ-<span>10</span></h1>
                    <h1><?= Html::encode($this->title) ?></h1>

                    <?= GridView::widget([

                        'dataProvider' => $dataProvider,
                        'summary'=>'',
                        //              'tableOptions' => ['style' => 'width:900px'],
                        //     'showHeader' => false,
                        'columns' => [
                            [
                                'header' => ' Мiсце',
                                'class' => 'yii\grid\SerialColumn',
                                'headerOptions' => ['style' => 'width:10%', ],
                            ],

                            [
                                'header' => 'Нiкнейм',
                                'attribute' => 'nickname',
                            ],
                            [
                                'header' => 'Пройдено <br>квестiв',
                                'attribute' => 'quests',
                            ],
                            [
                                'header' => 'Рейтинг',
                                'attribute' => 'rating',
                            ],


                        ]]);
                    ?>






            </table>

        </div>
    </div>
</section>