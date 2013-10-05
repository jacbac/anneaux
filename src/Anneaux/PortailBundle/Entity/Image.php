<?php
// src/Anneaux/PortailBundle/Entity/Image.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Anneaux\PortailBundle\Entity\ImageRepository")
 * @ORM\Table(name="image")
 * @ORM\HasLifecycleCallbacks()
 */
class Image
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  protected $name;

  /**
   * @ORM\Column(type="string", length=255)
   */
  protected $slug;

  /**
   * @ORM\ManyToOne(targetEntity="Article", inversedBy="images")
   * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
   */
  private $article;

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   * @return Image
   */
  public function setName($name)
  {
      $this->name = $name;
  
      return $this;
  }

  /**
   * Get name
   *
   * @return string 
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * Set slug
   *
   * @param string $slug
   * @return Image
   */
  public function setSlug($slug)
  {
      $this->slug = $slug;
  
      return $this;
  }

  /**
   * Get slug
   *
   * @return string 
   */
  public function getSlug()
  {
      return $this->slug;
  }

  /**
   * Set article
   *
   * @param \Anneaux\PortailBundle\Entity\Article $article
   * @return Image
   */
  public function setArticle(\Anneaux\PortailBundle\Entity\Article $article = null)
  {
      $this->article = $article;
  
      return $this;
  }

  /**
   * Get article
   *
   * @return \Anneaux\PortailBundle\Entity\Article 
   */
  public function getArticle()
  {
      return $this->article;
  }
}