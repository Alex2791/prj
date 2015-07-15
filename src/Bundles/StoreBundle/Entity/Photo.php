<?php

namespace Bundles\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 */
class Photo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var integer
     */
    private $damId;

    /**
     * @var integer
     */
    private $travelId;


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
     * Set adress
     *
     * @param string $adress
     * @return Photo
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set damId
     *
     * @param integer $damId
     * @return Photo
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
     * Set travelId
     *
     * @param integer $travelId
     * @return Photo
     */
    public function setTravelId($travelId)
    {
        $this->travelId = $travelId;

        return $this;
    }

    /**
     * Get travelId
     *
     * @return integer 
     */
    public function getTravelId()
    {
        return $this->travelId;
    }
}
