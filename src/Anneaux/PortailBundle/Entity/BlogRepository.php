<?php
// src/Anneaux/PortailBundle/Entity/BlogRepository.php

namespace Anneaux\PortailBundle\Entity;

use Doctrine\ORM\EntityRepository;

class BlogRepository extends EntityRepository
{
  /* 
   * Find all unique tags from actived blog posts
   * ordered alphabeticaly
   * 
   * @return 
   *
   */
  public function findAllActiveTags()
  {
    return $this->getEntityManager()
      ->createQuery('SELECT tag FROM AnneauxPortailBundle:Blog p ORDER BY p.name ASC')
      ->getResult();
  }

  /*
   * Find all unique tags from actived & deactivated blog posts
   * ordered alphabeticaly
   *
   * Use it for administration purpose
   */
  public function findAllTags()
  {
    return $this->getEntityManager()
      ->createQuery('SELECT tag FROM AnneauxPortailBundle:Blog p ORDER BY p.name ASC')
      ->getResult();
  }
}
