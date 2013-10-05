<?php
// src/Anneaux/PortailBundle/Controller/ArticleController.php

namespace Anneaux\PortailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
  public function indexAction()
  {
    $em = $this->getDoctrine()->getManager();

    $articles = $em->getRepository('PortailBundle:Article')->findAllArticlesCombined(true);
    $tags  = $em->getRepository('PortailBundle:Tag')->findActiveTags(true);

    if (!$articles)
    {
      throw $this->createNotFoundException('Unable to find Article posts.');
    }

    if (!$tags)
    {
      throw $this->createNotFoundException('Unable to find actives Tags.');
    }

    return $this->render('PortailBundle:Article:index.html.twig', array(
      'articles' => $articles,
      'tags'     => $tags
    ));
  }

  /**
   * Show a article entry
   */
  public function showAction($slug)
  {
    $em = $this->getDoctrine()->getManager();

    $article = $em->getRepository('PortailBundle:Article')->findOneBySlug($slug);

    if (!$article)
    {
      throw $this->createNotFoundException('Unable to find Article post.');
    }

    return $this->render('PortailBundle:Article:show.html.twig', array(
      'article' => $article,
    ));
  }

  /**
   * Search a author/tag/date reference
   */
  public function searchAction($slug)
  {
    $em = $this->getDoctrine()->getManager();
    $articles = $em->getRepository('PortailBundle:Article')->findbySearch($slug);
    $tags  = $em->getRepository('PortailBundle:Tag')->findActiveTags(true);
    
    if (!$articles)
    {
      throw $this->createNotFoundException('Unable to find Article posts.');
    }

    if (!$tags)
    {
      throw $this->createNotFoundException('Unable to find actives Tags.');
    }

    $tags  = $em->getRepository('PortailBundle:Tag')->findActiveTags(true);

    return $this->render('PortailBundle:Article:search.html.twig', array(
      'articles' => $articles,
      'tags'     => $tags
    ));
  }

}
