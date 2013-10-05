<?php
// src/Anneaux/PortailBundle/Entity/Article.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Anneaux\PortailBundle\Entity\ArticleRepository")
 * @ORM\Table(name="article")
 * @ORM\HasLifecycleCallbacks()
 */
class Article
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
   * @Gedmo\Slug(fields={"title"})
   * @ORM\Column(type="string", length=255)
   */
  protected $slug;

  /**
   * @ORM\Column(type="text")
   */
  protected $excerpt;

  /**
   * @ORM\Column(type="text")
   */
  protected $content;

  /**
   * @ORM\OneToMany(targetEntity="Image", mappedBy="article")
   */
  protected $images;
  
  /**
   * @ORM\ManyToMany(targetEntity="Tag", inversedBy="articles")
   * @ORM\JoinTable(name="articles_tags")
   **/
  protected $tags;

  /**
   * @ORM\ManyToMany(targetEntity="Author", inversedBy="articles")
   * @ORM\JoinTable(name="articles_authors")
   **/
  private $authors;

  /**
   * @ORM\Column(type="string", length=30)
   */
  protected $status; // non-publié, en relecture demandée, en brouillon, en attente; publié; archivé

  /**
   * @ORM\Column(type="boolean")
   */
  protected $isStar;  // est mis en avant, à la Une, dans bloc spéciale, surcharge le tri par ordre date ou alphabétique

  /**
   * @ORM\OneToMany(targetEntity="Comment", mappedBy="article")
   */
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
   * @ORM\Column(type="datetime")
   */
  protected $published;  

  /**
   * @ORM\Column(type="boolean")
   */
  protected $isPublished;  

  public function __construct() {
    $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
    $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    $this->images = new \Doctrine\Common\Collections\ArrayCollection();
  }

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
   * Set author
   *
   * @param string $author
   * @return Article
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
   * Set title
   *
   * @param string $title
   * @return Article
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
   * Set excerpt
   *
   * @param string $excerpt
   * @return Article
   */
  public function setExcerpt($excerpt)
  {
      $this->excerpt = $excerpt;
  
      return $this;
  }

  /**
   * Get excerpt
   *
   * @return string 
   */
  public function getExcerpt()
  {
      return $this->excerpt;
  }

  /**
   * Set content
   *
   * @param string $content
   * @return Article
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
   * Set status
   *
   * @param string $status
   * @return Article
   */
  public function setStatus($status)
  {
      $this->status = $status;
  
      return $this;
  }

  /**
   * Get status
   *
   * @return string 
   */
  public function getStatus()
  {
      return $this->status;
  }

  /**
   * Set isStar
   *
   * @param boolean $isStar
   * @return Article
   */
  public function setIsStar($isStar)
  {
      $this->isStar = $isStar;
  
      return $this;
  }

  /**
   * Get isStar
   *
   * @return boolean 
   */
  public function getIsStar()
  {
      return $this->isStar;
  }

  /**
   * Set created
   *
   * @ORM\PrePersist
   * 
   * @param \DateTime $created
   * @return Article
   */
  public function setCreated()
  {
      $this->created = new \DateTime();
  
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
   * @ORM\PrePersist
   * 
   * @param \DateTime $updated
   * @return Article
   */
  public function setUpdated()
  {
      $this->updated = new \DateTime();
  
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
   * Set published
   *
   * @param \DateTime $published
   * @return Article
   */
  public function setPublished($published)
  {
      $this->published = $published;
  
      return $this;
  }

  /**
   * Get published
   *
   * @return \DateTime 
   */
  public function getPublished()
  {
      return $this->published;
  }

  /**
   * Set isPublished
   *
   * @param boolean $isPublished
   * @return Article
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

  /**
   * Add images
   *
   * @param \Anneaux\PortailBundle\Entity\Image $images
   * @return Article
   */
  public function addImage(\Anneaux\PortailBundle\Entity\Image $images)
  {
      $this->images[] = $images;
  
      return $this;
  }

  /**
   * Remove images
   *
   * @param \Anneaux\PortailBundle\Entity\Image $images
   */
  public function removeImage(\Anneaux\PortailBundle\Entity\Image $images)
  {
      $this->images->removeElement($images);
  }

  /**
   * Get images
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getImages()
  {
      return $this->images;
  }

  /**
   * Add tags
   *
   * @param \Anneaux\PortailBundle\Entity\Tag $tags
   * @return Article
   */
  public function addTag(\Anneaux\PortailBundle\Entity\Tag $tags)
  {
      $this->tags[] = $tags;
  
      return $this;
  }

  /**
   * Remove tags
   *
   * @param \Anneaux\PortailBundle\Entity\Tag $tags
   */
  public function removeTag(\Anneaux\PortailBundle\Entity\Tag $tags)
  {
      $this->tags->removeElement($tags);
  }

  /**
   * Get tags
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getTags()
  {
      return $this->tags;
  }

  /**
   * Add comments
   *
   * @param \Anneaux\PortailBundle\Entity\Comment $comments
   * @return Article
   */
  public function addComment(\Anneaux\PortailBundle\Entity\Comment $comments)
  {
      $this->comments[] = $comments;
  
      return $this;
  }

  /**
   * Remove comments
   *
   * @param \Anneaux\PortailBundle\Entity\Comment $comments
   */
  public function removeComment(\Anneaux\PortailBundle\Entity\Comment $comments)
  {
      $this->comments->removeElement($comments);
  }

  /**
   * Get comments
   *
   * @return \Doctrine\Common\Collections\Collection 
   */
  public function getComments()
  {
      return $this->comments;
  }

  /**
   * Add authors
   *
   * @param \Anneaux\PortailBundle\Entity\Author $authors
   * @return Article
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

    /**
     * Set titleSlug
     *
     * @param string $titleSlug
     * @return Article
     */
    public function setTitleSlug($titleSlug)
    {
        $this->titleSlug = $titleSlug;
    
        return $this;
    }

    /**
     * Get titleSlug
     *
     * @return string 
     */
    public function getTitleSlug()
    {
        return $this->titleSlug;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
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
}