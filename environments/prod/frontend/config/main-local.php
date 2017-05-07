<?php
return [
    'components' => [
        'request' => [
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
