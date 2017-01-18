<?php

return [
    'view' => [
        'class' => 'yii\web\View',
        'renderers' => [
            'twig' => [
                'class' => 'yii\twig\ViewRenderer',
                'cachePath' => '@runtime/Twig/cache',
                // Array of twig options:
                'options' => [
                    'auto_reload' => true,
                ],
                'globals' => ['html' => '\yii\helpers\Html'],
                'uses' => ['yii\bootstrap'],
                'functions' => [
                    '_' => function($text) {
                        return \Yii::t('app', $text);
                    }
                ]
            ],
        ],
    ],
    'httpclient' => [
        'class' =>'understeam\httpclient\Client',
        'detectMimeType' => true,
    ],
];