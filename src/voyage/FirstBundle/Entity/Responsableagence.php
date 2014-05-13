<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsableagence
 *
 * @ORM\Table(name="responsableagence", indexes={@ORM\Index(name="id_agence_idx", columns={"id_Agence"})})
 * @ORM\Entity
 */
class Responsableagence
{
    /**
     * @var \voyage\FirstBundle\Entity\Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="voyage\FirstBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Responsable", referencedColumnName="id_Personne")
     * })
     */
    private $idResponsable;

    /**
     * @var \voyage\FirstBundle\Entity\Agence
     *
     * @ORM\ManyToOne(targetEntity="voyage\FirstBundle\Entity\Agence")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Agence", referencedColumnName="Id_Agence")
     * })
     */
    private $idAgence;



    /**
     * Set idResponsable
     *
     * @param \voyage\FirstBundle\Entity\Personne $idResponsable
     * @return Responsableagence
     */
    public function setIdResponsable(\voyage\FirstBundle\Entity\Personne $idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    /**
     * Get idResponsable
     *
     * @return \voyage\FirstBundle\Entity\Personne 
     */
    public function getIdResponsable()
    {
        return $this->idResponsable;
    }

    /**
     * Set idAgence
     *
     * @param \voyage\FirstBundle\Entity\Agence $idAgence
     * @return Responsableagence
     */
    public function setIdAgence(\voyage\FirstBundle\Entity\Agence $idAgence = null)
    {
        $this->idAgence = $idAgence;

        return $this;
    }

    /**
     * Get idAgence
     *
     * @return \voyage\FirstBundle\Entity\Agence 
     */
    public function getIdAgence()
    {
        return $this->idAgence;
    }
}
