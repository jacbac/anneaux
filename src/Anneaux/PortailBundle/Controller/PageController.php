<?php
// src/Anneaux/PortailBundle/Controller/PageController.php

namespace Anneaux\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortailBundle:Page:index.html.twig');
    }
}