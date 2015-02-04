<?php

namespace DV\Bundle\EnrichBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DVEnrichBundle:Default:index.html.twig', array('name' => $name));
    }
}
