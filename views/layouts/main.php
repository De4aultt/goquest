<?php

use yii\helpers\Html;

use app\assets\LavronAsset;
LavronAsset::register($this);

?>


    <!DOCTYPE html>
    <!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
    <!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
    <!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
    <!--[if gt IE 8]><!-->
    <html lang="ru">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <title>Квести у реальності</title>
        <meta content="" name="description" />
        <meta content="" property="og:image" />
        <meta content="" property="og:description" />
        <meta content="" property="og:site_name" />
        <meta content="website" property="og:type" />

        <meta content="telephone=no" name="format-detection" />
        <meta http-equiv="x-rim-auto-match" content="none">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="favicon.png" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>


    <?=$this->render("//common/head"); ?>

    <?=$content ?>
    <div class="hidden"></div>
    <!-- Mandatory for Responsive Bootstrap Toolkit to operate -->
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
    <!-- end mandatory -->

    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->

    <?=$this->render("//common/footer"); ?>
    <?php $this->endBody() ?>
    </body>
    </html>

<?php $this->endPage() ?>