<?php
// src/Anneaux/PortailBundle/Entity/ArticleRepository.php

namespace Anneaux\PortailBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository
{
  /* 
   * Find all articles with tags and authors combined
   * ordered by date ante
   * 
   * @return 
   */
  public function findAllArticlesCombined($active)
  {
    $query = $this->getEntityManager()
      ->createQuery('
        SELECT a, t, aut
        FROM PortailBundle:Article a
        JOIN a.tags t
        JOIN a.authors aut
        WHERE a.isPublished = :isPublished
        ORDER BY a.created DESC')
      ->setParameter('isPublished', $active);

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
  }  

  /* 
   * Find all articles with a specific slug search
   * (date, author or tag)
   * ordered by date ante
   * 
   * @return 
   */
  public function findbySearch($slug)
  {
    $query = $this->getEntityManager()
      ->createQuery('
        SELECT a, t, aut
        FROM PortailBundle:Article a
        JOIN a.tags t
        JOIN a.authors aut
        WHERE (a.created = :slug OR a.updated = :slug)
        OR t.slug LIKE :slug
        OR a.slug LIKE :slug')
      ->setParameter('slug', '%'.$slug.'%');

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
  }



}
