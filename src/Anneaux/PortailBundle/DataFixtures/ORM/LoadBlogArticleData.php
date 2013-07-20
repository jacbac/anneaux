<?php
// src/Anneaux/PortailBundle/DataFixtures/ORM/LoadBlogArticleData.php

namespace Anneaux\PortailBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Anneaux\PortailBundle\Entity\Blog;

class LoadBlogArticleData implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $blog1 = new Blog();
    $blog1->setTitle('A day with Symfony2');
    $blog1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
    $blog1->setImage('beach.jpg');
    $blog1->setAuteur('dsyph3r');
    $blog1->setCreated(new \DateTime());
    $blog1->setUpdated($blog1->getCreated());
    $blog1->setIsPublished(true);
    $manager->persist($blog1);

    $blog2 = new Blog();
    $blog2->setTitle('The pool on the roof must have a leak');
    $blog2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
    $blog2->setImage('pool_leak.jpg');
    $blog2->setAuteur('Zero Cool');
    $blog2->setCreated(new \DateTime("2011-07-23 06:12:33"));
    $blog2->setUpdated($blog2->getCreated());
    $blog2->setIsPublished(true);
    $manager->persist($blog2);

    $blog3 = new Blog();
    $blog3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
    $blog3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
    $blog3->setImage('misdirection.jpg');
    $blog3->setAuteur('Gabriel');
    $blog3->setCreated(new \DateTime("2011-07-16 16:14:06"));
    $blog3->setUpdated($blog3->getCreated());
    $blog3->setIsPublished(true);
    $manager->persist($blog3);

    $blog4 = new Blog();
    $blog4->setTitle('The grid - A digital frontier');
    $blog4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
    $blog4->setImage('the_grid.jpg');
    $blog4->setAuteur('Kevin Flynn');
    $blog4->setCreated(new \DateTime("2011-06-02 18:54:12"));
    $blog4->setUpdated($blog4->getCreated());
    $blog4->setIsPublished(true);
    $manager->persist($blog4);

    $blog5 = new Blog();
    $blog5->setTitle('You\'re either a one or a zero. Alive or dead');
    $blog5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
    $blog5->setImage('one_or_zero.jpg');
    $blog5->setAuteur('Gary Winston');
    $blog5->setCreated(new \DateTime("2011-04-25 15:34:18"));
    $blog5->setUpdated($blog5->getCreated());
    $blog5->setIsPublished(true);
    $manager->persist($blog5);

    $manager->flush();
  }

}
