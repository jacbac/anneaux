<?php
// src/Anneaux/PortailBundle/Entity/Author.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Anneaux\PortailBundle\Entity\AuthorRepository")
 * @ORM\Table(name="author")
 */
class Author
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $firstname;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $lastname;

  /**
   * @Gedmo\Slug(fields={"lastname", "firstname", "id"})
   * @ORM\Column(type="string", length=255)
   */
  protected $slug;

  /**
   * @ORM\Column(type="string", length=255)
   */
  protected $photo;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $country;

  /**
   * @ORM\Column(type="text")
   */
  protected $bio;

  /**
   * @ORM\Column(type="string", length=255)
   */
  protected $job;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $created;

  /**
   * @ORM\ManyToMany(targetEntity="Article", mappedBy="authors")
   **/
  protected $articles;

  /**
   * @ORM\ManyToMany(targetEntity="Tag", inversedBy="authors")
   * @ORM\JoinTable(name="authors_tags")
   **/
  protected $tags;

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
   * Set firstname
   *
   * @param string $firstname
   * @return Author
   */
  public function setFirstname($firstname)
  {
      $this->firstname = $firstname;
  
      return $this;
  }

  /**
   * Get firstname
   *
   * @return string 
   */
  public function getFirstname()
  {
      return $this->firstname;
  }

  /**
   * Set lastname
   *
   * @param string $lastname
   * @return Author
   */
  public function setLastname($lastname)
  {
      $this->lastname = $lastname;
  
      return $this;
  }

  /**
   * Get lastname
   *
   * @return string 
   */
  public function getLastname()
  {
      return $this->lastname;
  }

  /**
   * Set photo
   *
   * @param string $photo
   * @return Author
   */
  public function setPhoto($photo)
  {
      $this->photo = $photo;
  
      return $this;
  }

  /**
   * Get photo
   *
   * @return string 
   */
  public function getPhoto()
  {
      return $this->photo;
  }

  /**
   * Set country
   *
   * @param string $country
   * @return Author
   */
  public function setCountry($country)
  {
      $this->country = $country;
  
      return $this;
  }

  /**
   * Get country
   *
   * @return string 
   */
  public function getCountry()
  {
      return $this->country;
  }

  /**
   * Set bio
   *
   * @param string $bio
   * @return Author
   */
  public function setBio($bio)
  {
      $this->bio = $bio;
  
      return $this;
  }

  /**
   * Get bio
   *
   * @return string 
   */
  public function getBio()
  {
      return $this->bio;
  }

  /**
   * Set job
   *
   * @param string $job
   * @return Author
   */
  public function setJob($job)
  {
      $this->job = $job;
  
      return $this;
  }

  /**
   * Get job
   *
   * @return string 
   */
  public function getJob()
  {
      return $this->job;
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
   * Constructor
   */
  public function __construct()
  {
      $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
      $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
  }
  
  /**
   * Add articles
   *
   * @param \Anneaux\PortailBundle\Entity\Article $articles
   * @return Author
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
   * Add tags
   *
   * @param \Anneaux\PortailBundle\Entity\Tag $tags
   * @return Author
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
     * Set slug
     *
     * @param string $slug
     * @return Author
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
