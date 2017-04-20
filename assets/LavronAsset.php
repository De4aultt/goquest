<?php
namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class LavronAsset extends  AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [

            'libs/bootstrap-grid.min.css',
    'libs/font-awesome/css/font-awesome.min.css',
    'libs/linea/styles.css',
    'libs/popup/magnific-popup.css',
   'libs/animate.min.css',
   'css/fonts.css',
   'css/main.css',
    'css/media.css'

    ];

    public $js = [

'libs/html5shiv/es5-shim.min.js',
'libs/html5shiv/html5shiv.min.js',
'libs/html5shiv/html5shiv-printshiv.min.js',
'libs/respond/respond.min.js',

'libs/jquery-2.1.3.min.js',
'libs/parallax.min.js',
'libs/popup/jquery.magnific-popup.min.js',
'libs/mixitup.min.js',
'libs/PageScroll2id.min.js',
'libs/waypoints.min.js',
'libs/animate-css.js',
'libs/jqBootstrapValidation.js',
'js/common.js'

    ];

    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js

    ];
    public $jsOptions = [
        'position' =>  View::POS_HEAD,
    ];


}