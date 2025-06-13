<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),

    // i18N
    'language' => 'en-US',
    'sourceLanguage' => 'en-US',

    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'response' => [
            'class' => 'yii\web\Response',
            'format' => 'json',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-api', 'httpOnly' => true],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                'GET /novyny/<id:\d+>' => 'novyny/view',
                'GET /novosti/<id:\d+>' => 'novosti/view',
                'GET /news/<id:\d+>' => 'news/view',
                'GET /vidhuky/<id:\d+>' => 'vidhuky/view',
                'GET /reviews/<id:\d+>' => 'reviews/view',
                'GET /otzyvy/<id:\d+>' => 'otzyvy/view',
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'novyny',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'novosti',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'news',
                    'only' => ['index', 'view', 'options'],
                ],
                'GET /analityka/<id:\d+>' => 'analityka/view',
                'GET /analitika/<id:\d+>' => 'analitika/view',
                'GET /analitics/<id:\d+>' => 'analitics/view',
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'analityka',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'analitika',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'analitics',
                    'only' => ['index', 'view', 'options'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'investments',
                    'only' => ['index', 'view', 'options'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'investycii',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'investicii',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'vidhuky',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'reviews',
                    'only' => ['index', 'view', 'options'],
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'otzyvy',
                    'only' => ['index', 'view', 'options'],
                    'pluralize' => false,
                ],
            ],
        ],
    ],
    'params' => $params,
];
