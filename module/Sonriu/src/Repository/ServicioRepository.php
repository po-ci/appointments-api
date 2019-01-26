<?php

namespace Sonriu\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ServicioRepository
 *
 *
 *
 * @author
 * @license
 * @link
 */
class ServicioRepository extends EntityRepository
{

    public function save(\Sonriu\Entity\Servicio $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Sonriu\Entity\Servicio $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

