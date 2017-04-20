<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'goquestbasic',
    'name' => 'Go quest basic',
    'basePath' => dirname(__DIR__),

    'bootstrap' => ['devicedetect'],
    'bootstrap' => ['log'],
    'language' =>'uk-UA',
    'modules' => [
            'login' => [
                'class' => 'app\modules\login\Module',
            ],
        'signup' => [
            'class' => 'app\modules\signup\Module',
        ],
        'rate' => [
            'class' => 'app\modules\rate\Module',
        ],
        'main' => [
            'class' => 'app\modules\main\Module',
        ],

        'profile' => [
            'class' => 'app\modules\profile\Module',
        ],

        'quests' => [
            'class' => 'app\modules\quests\Module',
        ],
        'result' => [

            'class' => 'app\modules\result\Module',

        ],

    ],
    'components' => [

        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '1463743560367161',
                    'clientSecret' => '5e4691f9efa362993af1fa5af43add25',
                ],
                 'vkontakte' => [
                 'class' => 'yii\authclient\clients\VKontakte',
                 'clientId' => '5990670',
                 'clientSecret' => 'VAX8v8lVR4hZBeOacJE4',
                 ],
               'google' => [
                'class' => 'yii\authclient\clients\Google',
                'clientId' => '422825474728-hnq7bphvaadke1sicp0bcfkl4qco9aul.apps.googleusercontent.com',
                'clientSecret' => 'EBRAkTQYRH7G7E8fvuzfSfly',
            ],

            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'mrEpBFDqfc89dJMobyWkFU2K2cFp70cW',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'devicedetect' => [
            'class' => 'alikdex\devicedetect\DeviceDetect'
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;