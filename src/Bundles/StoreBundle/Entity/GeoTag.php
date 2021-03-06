<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoTag
 */
class GeoTag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $pin;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var integer
     */
    private $damId;


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
     * Set description
     *
     * @param string $description
     * @return GeoTag
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
     * Set pin
     *
     * @param string $pin
     * @return GeoTag
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Get pin
     *
     * @return string 
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return GeoTag
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return GeoTag
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set damId
     *
     * @param integer $damId
     * @return GeoTag
     */
    public function setDamId($damId)
    {
        $this->damId = $damId;

        return $this;
    }

    /**
     * Get damId
     *
     * @return integer 
     */
    public function getDamId()
    {
        return $this->damId;
    }
    /**
     * @var \Bundles\StoreBundle\Entity\Dam
     */
    private $dam;


    /**
     * Set dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     * @return GeoTag
     */
    public function setDam(\Bundles\StoreBundle\Entity\Dam $dam = null)
    {
        $this->dam = $dam;

        return $this;
    }

    /**
     * Get dam
     *
     * @return \Bundles\StoreBundle\Entity\Dam 
     */
    public function getDam()
    {
        return $this->dam;
    }
}
