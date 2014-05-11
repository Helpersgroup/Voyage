<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        
        
        return $this->render('VoyageBundle:Default:index.html.twig',array(
            'annonces' => $annonces,'username'=>"admin"
        ));
    }
    
      
       public function contactAction()
    {
        return $this->render('VoyageBundle:Default:contact.html.twig',array('username'=>"admin"));
    }
      
}
