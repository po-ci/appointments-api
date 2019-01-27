<?php

namespace Sonriu\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * CorsOptionsControllerFactory
 *
 *
 *
 * @author
 * @license
 * @link
 */
class CorsOptionsControllerFactory implements FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        return new \Sonriu\Controller\CorsOptionsController();
    }


}

