<?php

namespace GlavBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TipoRubroRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoRubroRepository extends EntityRepository
{
        public function findTipoRubro()
    {
        $qb = $this->createQueryBuilder('tr')->where('(tr.estado = 1)');
        $query = $qb->getQuery();
        return $query->execute();
    }
}
