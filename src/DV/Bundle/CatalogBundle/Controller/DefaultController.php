<?php

namespace DV\Bundle\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DVCatalogBundle:Default:index.html.twig', array('name' => $name));
    }
}
