<?php

/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 16/05/2017
 * Time: 09:02
 */

namespace AppBundle\Service;


use Doctrine\ORM\EntityManager;

class Calculator
{

    protected $_em = null;


    public function __construct(EntityManager $em)
    {
        $this->_em = $em;
    }


    public function somme($a, $b)
    {

        return $a + $b;
    }

    public function create($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();


    }

}