<?php

namespace Sonriu\Factory\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * ServiciosControllerFactory
 *
 *
 *
 * @author
 * @license
 * @link
 */
class ServiciosControllerFactory implements FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $container->get("doctrine.entitymanager.orm_default");
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $container->build("zf-metal-datagrid", ["customKey" => "sonriu-entity-servicio"]);
        return new \Sonriu\Controller\ServiciosController($em,$grid);
    }


}

