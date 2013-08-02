<?php
// src/Anneaux/PortailBundle/Controller/BlogController.php

namespace Anneaux\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $blogs = $em->getRepository('PortailBundle:Blog')->findAll();

    if (!$blogs)
    {
      throw $this->createNotFoundException('Unable to find Blog posts.');
    }

    return $this->render('PortailBundle:Blog:show.html.twig', array(
      'blogs' => $blogs,
    ));
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
