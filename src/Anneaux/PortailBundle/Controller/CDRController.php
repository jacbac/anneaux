<?php
// src/Anneaux/PortailBundle/Controller/CDRController.php

namespace Anneaux\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CDRController extends Controller
{
  /**
   * Show the main index
   */
  public function indexAction()
  {
    return $this->render('PortailBundle:CDR:index.html.twig');
  }

  /**
   * Show the image index
   */
  public function imagesAction()
  {
    return $this->render('PortailBundle:CDR:images.html.twig');
  }

  /**
   * Show an image entry
   */
  public function imageShowAction($id)
  {
    // $em = $this->getDoctrine()->getManager();
    // $img = $em->getRepository('PortailBundle:CDR')->find($id);

    // if (!$img)
    // {
    //   throw $this->createNotFoundException('Unable to find Image.');
    // }

    return $this->render('PortailBundle:CDR:imageShow.html.twig');
  }
}
