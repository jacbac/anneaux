<?php
// src/Anneaux/PortailBundle/Entity/Comment.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Anneaux\PortailBundle\Entity\CommentRepository")
 * @ORM\Table(name="comment")
 * @ORM\HasLifecycleCallbacks()
 */
class Comment
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
  protected $title;

  /**
   * @ORM\Column(type="text")
   */
  protected $content;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $created;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $updated;

  /**
   * @ORM\ManyToOne(targetEntity="Article", inversedBy="comments")
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
   * Set title
   *
   * @param string $title
   * @return Comment
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
   * Set content
   *
   * @param string $content
   * @return Comment
   */
  public function setContent($content)
  {
      $this->content = $content;
  
      return $this;
  }

  /**
   * Get content
   *
   * @return string 
   */
  public function getContent()
  {
      return $this->content;
  }

  /**
   * Set created
   *
   * @param \DateTime $created
   * @return Comment
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
   * @return Comment
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
   * Set article
   *
   * @param \Anneaux\PortailBundle\Entity\Article $article
   * @return Comment
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