<?php

return array(
    'controllers' => array(
        'factories' => array(
            \Sonriu\Controller\ServiciosController::class => \Sonriu\Factory\Controller\ServiciosControllerFactory::class,
            \Sonriu\Controller\CorsOptionsController::class => \Sonriu\Factory\Controller\CorsOptionsControllerFactory::class,
        ),
    ),
);