<?php

namespace SAM\PortfolioBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * CertificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CertificationRepository extends EntityRepository
{
    public function myFindTechnologies($tech)
    {
        $qb = $this->createQueryBuilder('c');

        $qb->where('c.tag = :tech')
            ->setParameter(':tech', $tech);

        return $qb->getQuery()->getResult();
    }

}
