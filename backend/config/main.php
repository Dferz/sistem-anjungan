<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'name' => 'Dashboard Anjungan IF',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'homeUrl' => '/sistem-anjungan/admin',
    'defaultRoute' => 'dashboard/index',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'dashboard/prestasi/insert' => 'dashboard/prestasi-insert',
                'dashboard/prestasi/view' => 'dashboard/prestasi-view',
                'dashboard/prestasi/update' => 'dashboard/prestasi-update',
                'dashboard/prestasi/delete' => 'dashboard/prestasi-delete',
                'dashboard/prestasi/delete-multiple' => 'dashboard/prestasi-delete-multiple',
                'dashboard/profil-dosen/insert' => 'dashboard/profil-dosen-insert',
                'dashboard/profil-dosen/view' => 'dashboard/profil-dosen-view',
                'dashboard/profil-dosen/update' => 'dashboard/profil-dosen-update',
                'dashboard/profil-dosen/delete' => 'dashboard/profil-dosen-delete',
                'dashboard/profil-dosen/delete-multiple' => 'dashboard/profil-dosen-delete-multiple',
                'dashboard/ta-unggulan/insert' => 'dashboard/ta-unggulan-insert',
                'dashboard/ta-unggulan/view' => 'dashboard/ta-unggulan-view',
                'dashboard/ta-unggulan/update' => 'dashboard/ta-unggulan-update',
                'dashboard/ta-unggulan/delete' => 'dashboard/ta-unggulan-delete',
                'dashboard/ta-unggulan/delete-multiple' => 'dashboard/ta-unggulan-delete-multiple',
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
            'baseUrl' => '/sistem-anjungan/admin',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
            'loginUrl' => ['dashboard/login'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
        'errorHandler' => [
            'errorAction' => 'dashboard/error',
        ],
        

        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'modules' => [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'params' => $params,
];
