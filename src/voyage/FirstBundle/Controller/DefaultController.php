<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $request = $this->getRequest();
    	$session = $request->getSession();
        
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
    	{
            $user = $this->get('security.context')->getToken()->getUser();
            
            echo($user);
    	
        $session = $this->getRequest()->getSession();

// We store an attribute
                $session->set('nom',sha1( 'admin'));

// in another controller for another request, we retrieve the value of this attribute
       
        
        
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        
        
        return $this->render('VoyageBundle:Default:index.html.twig',array(
            'annonces' => $annonces,'username'=>"admin"
        ));
        }
        else{
             $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        
        
        return $this->render('VoyageBundle:Default:index.html.twig',array(
            'annonces' => $annonces,'username'=>"admin"
        ));
        }
    }
    
      
       public function contactAction()
    {
        return $this->render('VoyageBundle:Default:contact.html.twig',array('username'=>"admin"));
    }
      
}
