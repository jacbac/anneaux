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

  /**
   * Show a blog entry
   */
  public function showAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    $blog = $em->getRepository('PortailBundle:Blog')->find($id);

    if (!$blog)
    {
      throw $this->createNotFoundException('Unable to find Blog post.');
    }

    return $this->render('PortailBundle:Blog:show.html.twig', array(
      'blog' => $blog,
    ));
  }
}
