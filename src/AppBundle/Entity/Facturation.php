<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturation
 *
 * @ORM\Table(name="facturation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturationRepository")
 */
class Facturation
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salle")
     */
    private $salle;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Reservation")
     */
    private $reservation;

    /**
     * @var int
     *
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="VAS", type="integer")
     */
    private $vAS;

    /**
     * @var int
     *
     * @ORM\Column(name="nettoyage", type="integer")
     */
    private $nettoyage;


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
     * Set idClient
     *
     * @param integer $Client
     *
     * @return Facturation
     */
    public function setClient($Client)
    {
        $this->Client = $Client;

        return $this;
    }

    /**
     * Get Client
     *
     * @return int
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * Set Salle
     *
     * @param integer $Salle
     *
     * @return Facturation
     */
    public function setSalle($Salle)
    {
        $this->Salle = $Salle;

        return $this;
    }

    /**
     * Get Salle
     *
     * @return int
     */
    public function getSalle()
    {
        return $this->Salle;
    }

    /**
     * Set Reservation
     *
     * @param integer $Reservation
     *
     * @return Facturation
     */
    public function setReservation($idReservation)
    {
        $this->Reservation = $idReservation;

        return $this;
    }

    /**
     * Get Reservation
     *
     * @return int
     */
    public function getReservation()
    {
        return $this->Reservation;
    }

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return Facturation
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set vAS
     *
     * @param integer $vAS
     *
     * @return Facturation
     */
    public function setVAS($vAS)
    {
        $this->vAS = $vAS;

        return $this;
    }

    /**
     * Get vAS
     *
     * @return int
     */
    public function getVAS()
    {
        return $this->vAS;
    }

    /**
     * Set nettoyage
     *
     * @param integer $nettoyage
     *
     * @return Facturation
     */
    public function setNettoyage($nettoyage)
    {
        $this->nettoyage = $nettoyage;

        return $this;
    }

    /**
     * Get nettoyage
     *
     * @return int
     */
    public function getNettoyage()
    {
        return $this->nettoyage;
    }
}

