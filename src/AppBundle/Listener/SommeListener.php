<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 17/05/2017
 * Time: 13:00
 */

namespace AppBundle\Listener;


use AppBundle\Event\SommeEvent;
use AppBundle\Entity\Somme;

class SommeListener
{


    private $_sommeService;

    public function __construct($s)
    {

        $this->_sommeService = $s;
    }


    public function somme(SommeEvent $event){


        $somme = new Somme();

        $somme->setNumber1($event->getNumber1());
        $somme->setNumber2($event->getNumber2());
        $this->_sommeService->create($somme);

    }
}