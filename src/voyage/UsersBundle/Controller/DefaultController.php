<?php

namespace voyage\UsersBundle\Controller;

use voyage\FirstBundle\Entity\Personne;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function loginAction()
    {
    	$request = $this->getRequest();
    	$session = $request->getSession();
    	
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
    	{
    		return $this->redirect($this->generateUrl('voyage_homepage'));
    	}
    	
    	// get the login error if there is one
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    		$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    		$session->remove(SecurityContext::AUTHENTICATION_ERROR);
    	}
    	
    	try{
    	$register = file_get_contents($this->container->getParameter('RegisterFile'));
    	}catch(\Exception $ex)
    	{
    		$register = "1" ;
    	}

$register = 1 ;
    	
    	return $this->render('voyageUsersBundle:Default:login.html.twig', array(
    			// last username entered by the user
    			'last_username' => $session->get(SecurityContext::LAST_USERNAME),
    			'error'         => $error,
    			'register' => $register,
    	));   	
    }
    
    
    public function registerAction() {
    	
    	/*try{
    		$register = file_get_contents($this->container->getParameter('RegisterFile'));
    	}catch(\Exception $ex)
    	{
    		$register = "1" ;
    	}
	*/

$register =  1 ;    	


    	if ($register == "1")
    	{
    		
    		
    	   	
    	//l'objet user
    	$user = new Personne();
    	//appel de service
    	$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
    	//setting up the user
    	/*$user->setRoles(array('ROLE_CLIENT'))
    	->setTime(null)
    	->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));*/
    	//creation du formulaire
    	$formBuilder = $this->createFormBuilder($user);
    	//ajout des champs voulu
    	$formBuilder
    	->add('nom','text')
    	->add('cin','text')
    	->add('prenom','text')
    	->add('email',   'text')
        ->add('tel','text')
    	->add('etat','text')
    	->add('logo','text')
    	->add('email',   'text')
        ->add('salt',   'text')        
    	->add('Mdp','password');
    	//génération du formulaire
    	$form = $formBuilder->getForm();
    	// On récupère la requête
    	$request = $this->get('request');
    	// On vérifie qu'elle est de type POST
    	if ($request->getMethod() == 'POST') {
    		// On fait le lien Requête <-> Formulaire
    		// À partir de maintenant, la variable $user contient les valeurs entrées dans le formulaire par le visiteur
    		$form->bind($request);
    		// On vérifie que les valeurs entrées sont correctes
    		 
    		if ($form->isValid()) {
    			// On l'enregistre notre objet $user dans la base de données
    			$em = $this->getDoctrine()->getManager();
    			 
    			$pass = $user->getMdp();
    			 
    			$user->setMdp($pass);
    			try {
    				$em->persist($user);
    				$em->flush();
    				return $this->redirect($this->generateUrl('login'));
    			} catch (\Exception $e) {
                            die($e);
    			}
    			 
    			 
    		}
    	}
    
    	return $this->render('voyageUsersBundle:Default:register.html.twig', array('form' => $form->createView()));
    
    	}
    	else {
    		return $this->redirect($this->generateUrl('login'));
    	}
    	
    }
     

}
