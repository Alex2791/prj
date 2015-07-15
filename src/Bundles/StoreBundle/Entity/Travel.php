<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Travel
 */
class Travel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $data;


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
     * Set name
     *
     * @param string $name
     * @return Travel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Travel
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Travel
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dam;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dam = new \Doctrine\Common\Collections\ArrayCollection();
        $this->photo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     * @return Travel
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

    /**
     * Add photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     * @return Travel
     */
    public function addPhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \Bundles\StoreBundle\Entity\Photo $photo
     */
    public function removePhoto(\Bundles\StoreBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }

    /**
     * Get photo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Add user
     *
     * @param \Bundles\StoreBundle\Entity\User $user
     * @return Travel
     */
    public function addUser(\Bundles\StoreBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \Bundles\StoreBundle\Entity\User $user
     */
    public function removeUser(\Bundles\StoreBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
