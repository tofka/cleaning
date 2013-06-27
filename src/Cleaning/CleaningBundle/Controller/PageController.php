<?php

namespace Cleaning\CleaningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('CleaningBundle:Page:index.html.twig');
    }
}