<?php

namespace AppBundle\Repository;

/**
 * PressRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PressRepository extends \Doctrine\ORM\EntityRepository
{
    public function displayPress()
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.enabled = 1');
        return $qb->getQuery()->getResult();
    }
}