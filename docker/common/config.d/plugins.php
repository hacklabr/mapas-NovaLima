<?php

return [
    'plugins' => [
        'MultipleLocalAuth' => [ 'namespace' => 'MultipleLocalAuth' ],
        'SamplePlugin' => ['namespace' => 'SamplePlugin'],
        'Analytics',
        'AdminLoginAsUser',
        'Accessibility',
        'SpamDetector',
        'Zammad' => [
            'namespace' => 'Zammad',
            'config' => [
                'url' => 'https://suporte.mapasculturais.com.br/assets/chat/chat-no-jquery.min.js',
                'enabled' => true,
            ]
        ],
        'MapasBlame' => [
            'namespace' => 'MapasBlame',
            'config' => [
                'request.logData.PATCH' => function ($data) {
                    return $data;
                },
            ]
        ],
    ]
];