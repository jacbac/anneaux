<?php
// src/Anneaux/PortailBundle/Entity/Auteur.php

namespace Anneaux\PortailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="auteur")
 */
class Auteur
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=40)
   */
  protected $nom;

  /**
   * @ORM\Column(type="string", length=30)
   */
  protected $prenom;

  /**
   * @ORM\Column(type="string", length=100)
   */
  protected $poste;

  /**
   * @ORM\Column(type="string", length=60)
   */
  protected $photo;

  protected $tags;

  /**
   * @ORM\Column(type="text")
   */
  protected $presentation;

  /**
   * @ORM\Column(type="datetime")
   */
  protected $created;


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
     * Set nom
     *
     * @param string $nom
     * @return Auteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Auteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Auteur
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Auteur
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
     * Set presentation
     *
     * @param string $presentation
     * @return Auteur
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Auteur
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
}