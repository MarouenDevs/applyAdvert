<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Somme
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements  UserInterface
{

    public function __construct()
    {
        $this->applications =new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="password",type="string", length=100)
     */
    private $password;

    /**
     * @ORM\Column(name="username",type="string", length=100)
     */
    private $username;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Application" ,mappedBy="user")
     *
     */
    private $applications;

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
       return $this->username;
    }
}

