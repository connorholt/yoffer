<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'normalizer' => [
        'class' => 'yii\web\UrlNormalizer',
        'action' => yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
        'normalizeTrailingSlash' => true,
    ],
    'suffix' => '/',
    'rules' => [
        // определяем главную
        '/' => 'promo/index',
        'pay/<id:\d+>' => 'promo/pay',
        'questions' => 'promo/questions',
        'questions/<typeId:\d+>' => 'promo/questions',
        'questions/<slug:[A-Za-z0-9 -_.]+>' => 'promo/question',
        'area/<typeId:\d+>' => 'area/index',
        'prices' => 'promo/prices',
        // закрываем регистрацию и изменение пароля, стандартного модуля
        // user/ чтобы понять какие ссылки куда ведут
        'user/login' => 'user/login',
        'user/logout' => 'user/logout',
        'user/admin' => 'user/admin',
//        [
//            'class' => 'app\components\routers\PagesUrlRule',
//        ]
    ],
];