<?php
return [
    'context' => [
        'application' => env('LOG_APP', env('APP_NAME')),
        'type' => '{level_name}'
    ],
    'format' => env('LOG_FORMAT', '[{level_name}] {message}'),
    'loki' => [
        'server' => env('LOG_SERVER', 'https://logs-prod3.grafana.net'),
        'username' => env('LOG_USERNAME', null),
        'password' => env('LOG_PASSWORD', null),
    ],
];
