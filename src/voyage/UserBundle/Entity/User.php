<?php
namespace voyage\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */


class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;
     /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your  last name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The last name is too short.",
     *     maxMessage="The last name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenom;
     /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Please enter your adress.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max="255",
     *     minMessage="The adress is too short.",
     *     maxMessage="The adress is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $adresse;
     /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank(message="Please enter your Phone number.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max="8",
     *     minMessage="The phone number is too short.",
     *     maxMessage="The phone number is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $telephone;
     /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=8,
     *     max="8",
     *     minMessage="The cin is too short.",
     *     maxMessage="The cin is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $cin;
/**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255, nullable=true)
     */
    protected $facebookId;

public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    /**
     * <a href="/param">@param</a> string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * <a href="/param">@param</a> Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->getNom($fbdata['first_name']);
             $this->setNom($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->getPrenom($fbdata['last_name']);
            $this->setPrenom($fbdata['last_name']);

        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
    }
    // ...
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function getCin() {
        return $this->cin;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }



    
}