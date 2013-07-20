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

}
