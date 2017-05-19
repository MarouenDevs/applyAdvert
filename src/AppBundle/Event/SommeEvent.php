<?php
/**
 * Created by PhpStorm.
 * User: m.benahmed
 * Date: 17/05/2017
 * Time: 13:01
 */

namespace AppBundle\Event;


use Symfony\Component\EventDispatcher\Event;

class SommeEvent extends Event
{


    private $_number1;
    private  $_number2;

    /**
     * @return mixed
     */
    public function getNumber2()
    {
        return $this->_number2;
    }

    /**
     * @param mixed $number2
     */
    public function setNumber2($number2)
    {
        $this->_number2 = $number2;
    }
    const name ='somme_event';
    /**
     * @return mixed
     */
    public function getNumber1()
    {
        return $this->_number1;
    }

    /**
     * @param mixed $number1
     */
    public function setNumber1($number1)
    {
        $this->_number1 = $number1;
    }



    public function __construct($a,$b)
    {

        $this->_number1 =$a;
        $this->_number2= $b;
    }


}