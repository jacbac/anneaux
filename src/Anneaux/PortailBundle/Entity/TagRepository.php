<?php
// src/Anneaux/PortailBundle/Entity/TagRepository.php

namespace Anneaux\PortailBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TagRepository extends EntityRepository
{
  /* 
   * Find all unique tags from actived blog posts
   * ordered alphabeticaly
   * 
   * @return 
   *
   */
  public function findActiveTags($active)
  {
    $query = $this->getEntityManager()
      ->createQuery('
        SELECT t
        FROM PortailBundle:Tag t
        JOIN t.articles a
        WHERE a.isPublished = :isPublished
        ORDER BY t.name ASC')
      ->setParameter('isPublished', $active);

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
  }

  /*
   * Find all unique tags from actived & deactivated blog posts
   * ordered alphabeticaly
   *
   * Use it for administration purpose
   */
  public function findAllTags()
  {
    $query = $this->getEntityManager()
      ->createQuery('
        SELECT t
        FROM PortailBundle:Tag t
        JOIN t.articles a
        ORDER BY t.name ASC');

    try {
        return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
  }
}
