<?php

namespace Bundles\StoreBundle\Entity;


use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{

    /**
     * Constructor
     * edit __construct 16.07
     *
     */
    public function __construct()
    {
        $this->travel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dam = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();

    }

    /**
     * @var integer
     */
    protected  $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @var string
     */
  //  protected  $username;

    /**
     * @var string
     */
    protected  $password;

    /**
     * @var string
     */
    private $fio;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    protected  $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $travel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dam;



    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    /*public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }*/

    /**
     * Get username
     *
     * @return string 
     */
  /*  public function getUsername()
    {
        return $this->username;
    }*/

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fio
     *
     * @param string $fio
     * @return User
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string 
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     * @return User
     */
    public function addTravel(\Bundles\StoreBundle\Entity\Travel $travel)
    {
        $this->travel[] = $travel;

        return $this;
    }

    /**
     * Remove travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     */
    public function removeTravel(\Bundles\StoreBundle\Entity\Travel $travel)
    {
        $this->travel->removeElement($travel);
    }

    /**
     * Get travel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * Add dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     * @return User
     */
    public function addDam(\Bundles\StoreBundle\Entity\Dam $dam)
    {
        $this->dam[] = $dam;

        return $this;
    }

    /**
     * Remove dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     */
    public function removeDam(\Bundles\StoreBundle\Entity\Dam $dam)
    {
        $this->dam->removeElement($dam);
    }

    /**
     * Get dam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDam()
    {
        return $this->dam;
    }
}
