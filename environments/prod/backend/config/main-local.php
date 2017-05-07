<?php
return [
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
            'csrfParam' => '_dapurCsrf',
        ],
        'user' => [
            'identityCookie' => [
                'name' => '_dapurUser', // unique for dapur
                'path' => '/dapur/web' // set it to correct path for dapur app.
            ]
        ],
        'session' => [
            'name' => '_dapurSessionId', // unique for dapur
            'savePath' => __DIR__ . '/../runtime/sessions' // set it to correct path for dapur app.
        ]],
        // url manager to access frontend
        'urlManagerFE' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '/practical', // change to your app base folder name
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ],
];
