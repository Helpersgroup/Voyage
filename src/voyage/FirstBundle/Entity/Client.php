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
     * @var \voyage\FirstBundle\Entity\Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="voyage\FirstBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Client", referencedColumnName="id_Personne")
     * })
     */
    private $idClient;



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
}
