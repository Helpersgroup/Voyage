<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="Id_Annonceur", columns={"id_Annonceur"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=20, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=20, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="hebergement", type="string", length=20, nullable=true)
     */
    private $hebergement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_Hebergement", type="string", length=20, nullable=true)
     */
    private $typeHebergement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_Annonce", type="string", length=20, nullable=true)
     */
    private $typeAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="transport", type="string", length=20, nullable=true)
     */
    private $transport;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=20, nullable=true)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="signalisation", type="integer", nullable=false)
     */
    private $signalisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Annonce", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var \voyage\FirstBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="voyage\FirstBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Annonceur", referencedColumnName="id_Personne")
     * })
     */
    private $idAnnonceur;



    /**
     * Set nom
     *
     * @param string $nom
     * @return Annonce
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     * @return Annonce
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Annonce
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
     * Set depart
     *
     * @param string $depart
     * @return Annonce
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string 
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Annonce
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
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
     * Set hebergement
     *
     * @param string $hebergement
     * @return Annonce
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string 
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Set typeHebergement
     *
     * @param string $typeHebergement
     * @return Annonce
     */
    public function setTypeHebergement($typeHebergement)
    {
        $this->typeHebergement = $typeHebergement;

        return $this;
    }

    /**
     * Get typeHebergement
     *
     * @return string 
     */
    public function getTypeHebergement()
    {
        return $this->typeHebergement;
    }

    /**
     * Set typeAnnonce
     *
     * @param string $typeAnnonce
     * @return Annonce
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return string 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set transport
     *
     * @param string $transport
     * @return Annonce
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;

        return $this;
    }

    /**
     * Get transport
     *
     * @return string 
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Annonce
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Annonce
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
     * Set prix
     *
     * @param string $prix
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set signalisation
     *
     * @param integer $signalisation
     * @return Annonce
     */
    public function setSignalisation($signalisation)
    {
        $this->signalisation = $signalisation;

        return $this;
    }

    /**
     * Get signalisation
     *
     * @return integer 
     */
    public function getSignalisation()
    {
        return $this->signalisation;
    }

    /**
     * Get idAnnonce
     *
     * @return integer 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set idAnnonceur
     *
     * @param \voyage\FirstBundle\Entity\Personne $idAnnonceur
     * @return Annonce
     */
    public function setIdAnnonceur(\voyage\FirstBundle\Entity\Personne $idAnnonceur = null)
    {
        $this->idAnnonceur = $idAnnonceur;

        return $this;
    }

    /**
     * Get idAnnonceur
     *
     * @return \voyage\FirstBundle\Entity\Personne 
     */
    public function getIdAnnonceur()
    {
        return $this->idAnnonceur;
    }
    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     * @return Annonce
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}
