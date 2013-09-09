<?php
// src/Anneaux/PortailBundle/Entity/Blog.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 * @ORM\HasLifecycleCallbacks()
 */
class Blog
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $title;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $author;

  protected $excerpt;

  /**
   * @ORM\Column(type="text")
   */
  protected $text;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $image;




  protected $tags;  // relation

  protected $state; // non-publié, en relecture demandée, en brouillon, en attente; publié; archivé

  protected $version; // numéro de version (nécessite de dupliquer l'entrée de la BDD à chaque nouvelle version ?)
  // archive de 5 versions ? suppression des 2 plus anciennes versions au bout de 3 mois si pas utilisée ?

  protected $isStar;  // est mis en avant, à la Une, dans bloc spéciale, surcharge le tri par ordre date ou alphabétique

  protected $comments; // relation

  /**
   * @ORM\Column(type="datetime")
   */
  protected $created;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $updated;

  /**
   * @ORM\Column(type="boolean")
   */
  protected $isPublished;  

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
   * Set title
   *
   * @param string $title
   * @return Blog
   */
  public function setTitle($title)
  {
      $this->title = $title;
  
      return $this;
  }

  /**
   * Get title
   *
   * @return string 
   */
  public function getTitle()
  {
      return $this->title;
  }

  /**
   * Set author
   *
   * @param string $author
   * @return Blog
   */
  public function setAuthor($author)
  {
      $this->author = $author;
  
      return $this;
  }

  /**
   * Get author
   *
   * @return string 
   */
  public function getAuthor()
  {
      return $this->author;
  }

  /**
   * Set text
   *
   * @param string $text
   * @return Blog
   */
  public function setText($text)
  {
      $this->text = $text;
  
      return $this;
  }

  /**
   * Get text
   *
   * @return string 
   */
  public function getText()
  {
      return $this->text;
  }

  /**
   * Set image
   *
   * @param string $image
   * @return Blog
   */
  public function setImage($image)
  {
      $this->image = $image;
  
      return $this;
  }

  /**
   * Get image
   *
   * @return string 
   */
  public function getImage()
  {
      return $this->image;
  }

  /**
   * Set created
   *
   * @param \DateTime $created
   * @return Blog
   */
  public function setCreated($created)
  {
      $this->created = $created;
  
      return $this;
  }

  /**
   * Get created
   *
   * @return \DateTime 
   */
  public function getCreated()
  {
      return $this->created;
  }

  /**
   * Set updated
   *
   * @param \DateTime $updated
   * @return Blog
   */
  public function setUpdated($updated)
  {
      $this->updated = $updated;
  
      return $this;
  }

  /**
   * Get updated
   *
   * @return \DateTime 
   */
  public function getUpdated()
  {
      return $this->updated;
  }

  /**
   * Set isPublished
   *
   * @param boolean $isPublished
   * @return Blog
   */
  public function setIsPublished($isPublished)
  {
      $this->isPublished = $isPublished;
  
      return $this;
  }

  /**
   * Get isPublished
   *
   * @return boolean 
   */
  public function getIsPublished()
  {
      return $this->isPublished;
  }


  public function __construct()
  {
    $this->setCreated(new \DateTime());
    $this->setUpdated(new \DateTime());
  }

  /**
   * @ORM\PreUpdate
   */
  public function setUpdatedValue()
  {
    $this->setUpdated(new \DateTime());
  }
}
