<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VoyageBundle:Default:index.html.twig');
    }
    
      public function annoncesAction()
    {
        return $this->render('VoyageBundle:Default:travel_grid.html.twig');
    }
}
