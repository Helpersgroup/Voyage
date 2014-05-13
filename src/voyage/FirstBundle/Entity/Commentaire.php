<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="perso_idx", columns={"id_Personne"}), @ORM\Index(name="ann_idx", columns={"id_Annonce"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Commentaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var \voyage\FirstBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="voyage\FirstBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Personne", referencedColumnName="id_Personne")
     * })
     */
    private $idPersonne;

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
     * Set message
     *
     * @param string $message
     * @return Commentaire
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get idCommentaire
     *
     * @return integer 
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set idPersonne
     *
     * @param \voyage\FirstBundle\Entity\Personne $idPersonne
     * @return Commentaire
     */
    public function setIdPersonne( $idPersonne)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get idPersonne
     *
     * @return \voyage\FirstBundle\Entity\Personne 
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set idAnnonce
     *
     * @param \voyage\FirstBundle\Entity\Annonce $idAnnonce
     * @return Commentaire
     */
    public function setIdAnnonce( $idAnnonce)
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
     * @var \DateTime
     */
    private $date;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
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
}
