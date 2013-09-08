<?php
// src/Anneaux/PortailBundle/Controller/SiteController.php

namespace Anneaux\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
  /**
   * Show the main index
   */
  public function indexAction()
  {
    return $this->render('PortailBundle:Site:index.html.twig');
  }
}
