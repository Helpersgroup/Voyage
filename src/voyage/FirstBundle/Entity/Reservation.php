<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="Id_Client", columns={"id_Client"}), @ORM\Index(name="Id_Annonce", columns={"id_Annonce"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_enfant", type="integer", nullable=false)
     */
    private $nbEnfant;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_adultes", type="integer", nullable=false)
     */
    private $nbAdultes;

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \voyage\FirstBundle\Entity\Annonce
     *
     * @ORM\ManyToOne(targetEntity="voyage\FirstBundle\Entity\Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Annonce", referencedColumnName="id_Annonce")
     * })
     */
    private $idAnnonce;

    /**
     * @var \voyage\FirstBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="voyage\FirstBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Client", referencedColumnName="id_Client")
     * })
     */
    private $idClient;



    /**
     * Set etat
     *
     * @param integer $etat
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
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbEnfant
     *
     * @param integer $nbEnfant
     * @return Reservation
     */
    public function setNbEnfant($nbEnfant)
    {
        $this->nbEnfant = $nbEnfant;

        return $this;
    }

    /**
     * Get nbEnfant
     *
     * @return integer 
     */
    public function getNbEnfant()
    {
        return $this->nbEnfant;
    }

    /**
     * Set nbAdultes
     *
     * @param integer $nbAdultes
     * @return Reservation
     */
    public function setNbAdultes($nbAdultes)
    {
        $this->nbAdultes = $nbAdultes;

        return $this;
    }

    /**
     * Get nbAdultes
     *
     * @return integer 
     */
    public function getNbAdultes()
    {
        return $this->nbAdultes;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return Reservation
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

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
     * Set idAnnonce
     *
     * @param \voyage\FirstBundle\Entity\Annonce $idAnnonce
     * @return Reservation
     */
    public function setIdAnnonce(\voyage\FirstBundle\Entity\Annonce $idAnnonce = null)
    {
        $this->idAnnonce = $idAnnonce;

        return $this;
    }

    /**
     * Get idAnnonce
     *
     * @return \voyage\FirstBundle\Entity\Annonce 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idClient
     *
     * @param \voyage\FirstBundle\Entity\Client $idClient
     * @return Reservation
     */
    public function setIdClient(\voyage\FirstBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \voyage\FirstBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
