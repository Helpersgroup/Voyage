<?php



namespace voyage\FirstBundleBundle\DataFixtures\ORM ;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use voyage\FirstBundleBundle\Entity\Personne;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Users implements FixtureInterface,ContainerAwareInterface {

    private $container ;
    
    public function setContainer(ContainerInterface $c = null)
    {
    	$this->container = $c ;
    }
	
	public function load(ObjectManager $manager)
	{
		$user = new User();
		$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
		$user->setEmail("kimo@kimo.com")
		     ->setUsername("kimo")
		     ->setName("kimo")
		     ->setFirstname("kimo")
		     ->setRoles(array('ROLE_CLIENT'))
		     ->setTime(null)
		     ->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));
		$user->setPassword($this->encodePassword($user,"kimo"));
		
		$manager->persist($user);
        
        $user2 = new User();
       
        
        $manager->flush();
	
	}
	
	private function encodePassword($user, $plainPassword)
	{
		$encoder = $this->container->get('security.encoder_factory')
		->getEncoder($user)
		;

		return $encoder->encodePassword($plainPassword, $user->getSalt());
	}
	
}
