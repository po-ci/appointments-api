<?php

return[
    'zf-metal-mail.options' => [
        'default_from' => 'xxxxx@xxxxx.com',
        'transport' => 'Zend\Mail\Transport\Smtp',
        'transport_options' => [
            'name' => 'Gmail',
            'host' => 'xxxxx', //smtp.gmail.com
            'port' => 465,
            // Notice port change for TLS is 587
            'connection_class' => 'plain',
            'connection_config' => [
                'username' => 'xxxxx@xxxxx.com', //Email para autenticar
                'password' => 'xxxxx', //Password del email
                'ssl' => 'ssl',
            ],
        ]
    ],
];
