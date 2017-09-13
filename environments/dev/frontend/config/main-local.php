<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
            'csrfParam' => '_frontendCsrf',
        ],
        'user' => [
            'identityCookie' => [
                'name' => '_frontendUser', // unique for frontend
                'path' => '/' // set it to correct path for frontend app.
            ]
        ],
        'session' => [
            'name' => '_frontendSessionId', // unique for frontend
            'savePath' => __DIR__ . '/../runtime/sessions' // set it to correct path for frontend app.
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
        'generators' => [ //here
            'crud' => [ // generator name
                'class' => 'yii\gii\generators\crud\Generator', // generator class
                'templates' => [ //setting for out templates
                    'crudKamek' => '@app/giitemplate/crud', // template name => path to template
                ]
            ]
        ],
    ];
}

return $config;
