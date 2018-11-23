<?php

namespace IsetRades\GestionColisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IsetRadesGestionColisBundle:Default:index.html.twig');
    }
}
