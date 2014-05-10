<?php

namespace voyage\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('voyageUsersBundle:Default:index.html.twig', array('name' => $name));
    }
}
