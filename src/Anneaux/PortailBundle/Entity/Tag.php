<?php
// src/Anneaux/PortailBundle/Entity/Tag.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Anneaux\PortailBundle\Entity\TagRepository")
 * @ORM\Table(name="tag")
 * @ORM\HasLifecycleCallbacks()
 */
class Tag
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=30)
   */
  protected $name;

  /**
   * @ORM\Column(type="string", length=30)
   */
  protected $slug;

  /**
   * @ORM\ManyToMany(targetEntity="Article", mappedBy="tags")
   **/
  private $articles;

  /**
   * @ORM\ManyToMany(targetEntity="Author", mappedBy="tags")
   **/
  private $authors;

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
   * @return Tag
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
   * @return Tag
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
   * @return Tag
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

  /**
   * Set author
   *
   * @param \Anneaux\PortailBundle\Entity\Author $author
   * @return Tag
   */
  public function setAuthor(\Anneaux\PortailBundle\Entity\Author $author = null)
  {
      $this->author = $author;
  
      return $this;
  }

  /**
   * Get author
   *
   * @return \Anneaux\PortailBundle\Entity\Author 
   */
  public function getAuthor()
  {
      return $this->author;
  }
  /**
   * Constructor
   */
  public function __construct()
  {
      $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
      $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
  }
  
  /**
   * Add articles
   *
   * @param \Anneaux\PortailBundle\Entity\Article $articles
   * @return Tag
   */
  public function addArticle(\Anneaux\PortailBundle\Entity\Article $articles)
  {
      $this->articles[] = $articles;
  
      return $this;
  }

  /**
   * Remove articles
   *
   * @param \Anneaux\PortailBundle\Entity\Article $articles
   */
  public function removeArticle(\Anneaux\PortailBundle\Entity\Article $articles)
  {
      $this->articles->removeElement($articles);
  }

  /**
   * Get articles
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getArticles()
  {
      return $this->articles;
  }

  /**
   * Add authors
   *
   * @param \Anneaux\PortailBundle\Entity\Author $authors
   * @return Tag
   */
  public function addAuthor(\Anneaux\PortailBundle\Entity\Author $authors)
  {
      $this->authors[] = $authors;
  
      return $this;
  }

  /**
   * Remove authors
   *
   * @param \Anneaux\PortailBundle\Entity\Author $authors
   */
  public function removeAuthor(\Anneaux\PortailBundle\Entity\Author $authors)
  {
      $this->authors->removeElement($authors);
  }

  /**
   * Get authors
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getAuthors()
  {
      return $this->authors;
  }
}