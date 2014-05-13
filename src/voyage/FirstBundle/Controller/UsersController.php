<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function inscriptionAction()
    {
        return $this->render('VoyageBundle:users:inscription.html.twig');
    }
    public function profilAction()
    {
        return $this->render('VoyageBundle:users:profil.html.twig');
    }
}
