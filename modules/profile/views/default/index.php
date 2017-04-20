<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$id_player = Yii::$app->user->identity->id;
?>
<section class="profile">
    <div class="bgs"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-4 profile_wrap">
                <h1>Мій <span>профіль</span></h1>
                <hr>
                <div class="icon_wrap">
                    <i class="icon-basic-spread-text"></i>
                    <h3>Нікнейм:</h3></div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->nickname;
                    ?></p>
                <div class="icon_wrap">
                    <i class="icon-basic-mail"></i>
                    <h3>Email :</h3></div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->email;
                    ?></p>
                <div class="icon_wrap">
                    <i class="icon-basic-book"></i>
                    <h3>Імя :</h3>
                </div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->name;
                    ?></p>
                <div class="icon_wrap">
                    <i class="icon-basic-lock-open"></i>
                    <h3>Кількість пройдених квестів :</h3>
                </div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->quests;
                    ?></p>
                <div class="icon_wrap">
                    <i class="icon-basic-lock"></i>
                    <h3>Кількість невдалих спроб :</h3>
                </div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->failed;
                    ?></p>
                <div class="icon_wrap">
                    <i class="icon-basic-star"></i>
                    <h3>Рейтинг :</h3>
                </div>
                <p><?php
                    $player = User::findOne($id_player);
                    echo $player->rating;
                    ?></p>

        <a href="#popup-portfolio" class="button btnsh open-popup-link" ">Змінити профіль</a>


        <div id="popup-portfolio" class="white-popup mfp-hide">
            <form method="post" class="change_form">


<?php
    $form = ActiveForm::begin([
    'id' => 'change-form',
    'options' => ['class' => 'form-horizontal', ],
    ]) ?>
                <p><?= $form->field($model, 'nickname') ?></p>
                <p><?= $form->field($model, 'email') ?></p>
                <p><?= $form->field($model, 'password')->passwordInput() ?></p>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Змінити', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
        </div>
                <?php ActiveForm::end();  ?>

        </div>
    </div>
    </div>
</section>