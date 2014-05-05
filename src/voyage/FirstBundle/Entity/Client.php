<?php

namespace voyage\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Client", referencedColumnName="id_Personne")
     * })
     */
    private $idClient;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Annonce", inversedBy="idClient")
     * @ORM\JoinTable(name="reservation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_Client", referencedColumnName="id_Client")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_Annonce", referencedColumnName="id_Annonce")
     *   }
     * )
     */
    private $idAnnonce;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAnnonce = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set idClient
     *
     * @param \voyage\FirstBundle\Entity\Personne $idClient
     * @return Client
     */
    public function setIdClient(\voyage\FirstBundle\Entity\Personne $idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \voyage\FirstBundle\Entity\Personne 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Add idAnnonce
     *
     * @param \voyage\FirstBundle\Entity\Annonce $idAnnonce
     * @return Client
     */
    public function addIdAnnonce(\voyage\FirstBundle\Entity\Annonce $idAnnonce)
    {
        $this->idAnnonce[] = $idAnnonce;

        return $this;
    }

    /**
     * Remove idAnnonce
     *
     * @param \voyage\FirstBundle\Entity\Annonce $idAnnonce
     */
    public function removeIdAnnonce(\voyage\FirstBundle\Entity\Annonce $idAnnonce)
    {
        $this->idAnnonce->removeElement($idAnnonce);
    }

    /**
     * Get idAnnonce
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }
}
