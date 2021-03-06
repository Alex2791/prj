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
    /**
     * @var \Bundles\StoreBundle\Entity\Dam
     */
    private $dam;


    /**
     * Set dam
     *
     * @param \Bundles\StoreBundle\Entity\Dam $dam
     * @return Photo
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
    /**
     * @var \Bundles\StoreBundle\Entity\Travel
     */
    private $travel;


    /**
     * Set travel
     *
     * @param \Bundles\StoreBundle\Entity\Travel $travel
     * @return Photo
     */
    public function setTravel(\Bundles\StoreBundle\Entity\Travel $travel = null)
    {
        $this->travel = $travel;

        return $this;
    }

    /**
     * Get travel
     *
     * @return \Bundles\StoreBundle\Entity\Travel 
     */
    public function getTravel()
    {
        return $this->travel;
    }
}
