<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManifestation", type="string", length=255)
     */
    private $nomManifestation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireDebut", type="time")
     */
    private $horaireDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireFin", type="time")
     */
    private $horaireFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbParticipant", type="integer")
     */
    private $nbParticipant;

    /**
     * @var int
     *
     * @ORM\Column(name="arrhesVerse", type="integer")
     */
    private $arrhesVerse;


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
     * @param integer $idClient
     *
     * @return Reservation
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

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
     * Set etat
     *
     * @param integer $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set nomManifestation
     *
     * @param string $nomManifestation
     *
     * @return Reservation
     */
    public function setNomManifestation($nomManifestation)
    {
        $this->nomManifestation = $nomManifestation;

        return $this;
    }

    /**
     * Get nomManifestation
     *
     * @return string
     */
    public function getNomManifestation()
    {
        return $this->nomManifestation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set horaireDebut
     *
     * @param \DateTime $horaireDebut
     *
     * @return Reservation
     */
    public function setHoraireDebut($horaireDebut)
    {
        $this->horaireDebut = $horaireDebut;

        return $this;
    }

    /**
     * Get horaireDebut
     *
     * @return \DateTime
     */
    public function getHoraireDebut()
    {
        return $this->horaireDebut;
    }

    /**
     * Set horaireFin
     *
     * @param \DateTime $horaireFin
     *
     * @return Reservation
     */
    public function setHoraireFin($horaireFin)
    {
        $this->horaireFin = $horaireFin;

        return $this;
    }

    /**
     * Get horaireFin
     *
     * @return \DateTime
     */
    public function getHoraireFin()
    {
        return $this->horaireFin;
    }

    /**
     * Set nbParticipant
     *
     * @param integer $nbParticipant
     *
     * @return Reservation
     */
    public function setNbParticipant($nbParticipant)
    {
        $this->nbParticipant = $nbParticipant;

        return $this;
    }

    /**
     * Get nbParticipant
     *
     * @return int
     */
    public function getNbParticipant()
    {
        return $this->nbParticipant;
    }

    /**
     * Set arrhesVerse
     *
     * @param integer $arrhesVerse
     *
     * @return Reservation
     */
    public function setArrhesVerse($arrhesVerse)
    {
        $this->arrhesVerse = $arrhesVerse;

        return $this;
    }

    /**
     * Get arrhesVerse
     *
     * @return int
     */
    public function getArrhesVerse()
    {
        return $this->arrhesVerse;
    }
}

