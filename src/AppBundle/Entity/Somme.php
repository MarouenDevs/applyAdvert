<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Somme
 *
 * @ORM\Table(name="somme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SommeRepository")
 */
class Somme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="number1", type="string", length=255)
     * @Assert\NotBlank(message="veuillez saisir number 1")
     * @Assert\Range(
     *      min = 1,
     *      max = 20,
     *      minMessage = "You must be at least {{ limit }}cm tall to enter",
     *      maxMessage = "You cannot be taller than {{ limit }}cm to enter")
     */
    private $number1;

    /**
     * @var string
     *
     * @ORM\Column(name="number2", type="string", length=255)
     * @Assert\NotBlank(message="veuillez saisir number 2")
     * @Assert\Range(
     *      min = 1,
     *      max = 20,
     *      minMessage = "You must be at least {{ limit }}  tall to enter",
     *      maxMessage = "You cannot be taller than {{ limit }}  to enter")
     */
    private $number2;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number1
     *
     * @param string $number1
     *
     * @return Somme
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;

        return $this;
    }

    /**
     * Get number1
     *
     * @return string
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * Set number2
     *
     * @param string $number2
     *
     * @return Somme
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;

        return $this;
    }

    /**
     * Get number2
     *
     * @return string
     */
    public function getNumber2()
    {
        return $this->number2;
    }
}

