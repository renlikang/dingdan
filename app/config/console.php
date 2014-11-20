<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db2.php');

return [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
       'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'rule'  => [
                         '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                         '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                         '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                        ],
            'enablePrettyUrl' => true,
            'showScriptName' => true,
        ],         
    ],
    'params' => $params,
];
