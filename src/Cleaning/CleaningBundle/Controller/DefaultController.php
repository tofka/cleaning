<?php

namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CleaningBundle:Default:index.html.twig', array('name' => $name));
    }
}
