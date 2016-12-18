<?php
/**
 * Created by PhpStorm.
 * User: p33t
 * Date: 18/12/16
 * Time: 20:55
 */

namespace AppBundle\Extensions;

use Doctrine\Bundle\DoctrineBundle\Registry;

class TstService
{
    private $entityManager = null;

    public function __construct(Registry $doctrine)
    {
        if(!$this->entityManager)
        {
            $this->entityManager = $doctrine->getManager();
        }
    }

    public function getTaskById($id)
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('t')
            ->from('MyFirstBundle:Todo', 't')
            ->where('t.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getResult();
    }


}