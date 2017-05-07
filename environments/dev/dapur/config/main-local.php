<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            'csrfParam' => '_dapurCsrf',
        ],
        'user' => [
            'identityCookie' => [
                'name' => '_dapurUser', // unique for dapur
                'path' => '/dapur' // set it to correct path for dapur app.
            ]
        ],
        'session' => [
            'name' => '_dapurSessionId', // unique for dapur
            'savePath' => __DIR__ . '/../runtime/sessions' // set it to correct path for dapur app.
        ],
        // url manager to access frontend
        'urlManagerFE' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/practical', // change to your app base folder name
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ],
];

if (!YII_ENV_TEST) {
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
