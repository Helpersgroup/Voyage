<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jaime
 *
 * @ORM\Table(name="jaime", indexes={@ORM\Index(name="id_annonce_idx", columns={"id_Annonce"}), @ORM\Index(name="id_personne_idx", columns={"id_Personne"})})
 * @ORM\Entity
 */
class Jaime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Jaime", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJaime;

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
     * Get idJaime
     *
     * @return integer 
     */
    public function getIdJaime()
    {
        return $this->idJaime;
    }

    /**
     * Set idPersonne
     *
     * @param \voyage\FirstBundle\Entity\Personne $idPersonne
     * @return Jaime
     */
    public function setIdPersonne(\voyage\FirstBundle\Entity\Personne $idPersonne = null)
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
     * @return Jaime
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
}
