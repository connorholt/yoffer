<?php

$db = require(__DIR__ . '/db/' . YII_ENV . '_db.php');
$params = require(__DIR__ . '/params.php');
$modules = require(__DIR__ . '/modules.php');
$components = require(__DIR__ . '/components.php');

$urlManager = require(__DIR__ . '/urlManager.php');

$config = [
    'id'           => 'basic',
    'basePath'     => dirname(__DIR__),
    'bootstrap'    => ['log'],
    'components'   => $components + [
            // компоненты добавлять в components.php
            'db'         => $db,
            'urlManager' => $urlManager,
            'request' => [
                'cookieValidationKey' => 'yCWiaB5q3g2ef00dMAG41msdKF4hbFoe',
            ],
            'cache' => [
                'class' => 'yii\caching\FileCache',
            ],
            'user' => [
                'class' => 'app\modules\user\components\User',
            ],
            'errorHandler' => [
                'errorAction' => YII_DEBUG ? 'site/error' : 'error/error',
            ],
            'mailer' => [
                'class' => 'yii\swiftmailer\Mailer',
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
            ]
        ],
    'params'       => $params,
    'defaultRoute' => 'page',
    'language'     => 'ru',
    'modules'      => $modules
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
