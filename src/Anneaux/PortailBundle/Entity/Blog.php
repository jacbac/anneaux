<?php
// src/Anneaux/PortailBundle/Entity/Blog.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
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
  protected $auteur;

  /**
   * @ORM\Column(type="text")
   */
  protected $blog;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $image;

  protected $tags;

  protected $comments;

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
   * Set auteur
   *
   * @param string $auteur
   * @return Blog
   */
  public function setAuteur($auteur)
  {
      $this->auteur = $auteur;
  
      return $this;
  }

  /**
   * Get auteur
   *
   * @return string 
   */
  public function getAuteur()
  {
      return $this->auteur;
  }

  /**
   * Set blog
   *
   * @param string $blog
   * @return Blog
   */
  public function setBlog($blog)
  {
      $this->blog = $blog;
  
      return $this;
  }

  /**
   * Get blog
   *
   * @return string 
   */
  public function getBlog()
  {
      return $this->blog;
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
}
