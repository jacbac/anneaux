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
    $blog2->setUpdated(new \DateTime("2012-06-02 18:54:12"));
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
    $blog4->setUpdated(new \DateTime("2011-12-02 18:54:12"));
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

    $blog6 = new Blog();
    $blog6->setTitle('A day with Symfony2');
    $blog6->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
    $blog6->setImage('beach.jpg');
    $blog6->setAuteur('dsyph3r');
    $blog6->setCreated(new \DateTime());
    $blog6->setUpdated($blog6->getCreated());
    $blog6->setIsPublished(true);
    $manager->persist($blog6);

    $blog7 = new Blog();
    $blog7->setTitle('The pool on the roof must have a leak');
    $blog7->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
    $blog7->setImage('pool_leak.jpg');
    $blog7->setAuteur('Zero Cool');
    $blog7->setCreated(new \DateTime("2011-07-23 06:12:33"));
    $blog7->setUpdated($blog7->getCreated());
    $blog7->setIsPublished(true);
    $manager->persist($blog7);

    $blog8 = new Blog();
    $blog8->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
    $blog8->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
    $blog8->setImage('misdirection.jpg');
    $blog8->setAuteur('Gabriel');
    $blog8->setCreated(new \DateTime("2011-07-16 16:14:06"));
    $blog8->setUpdated($blog8->getCreated());
    $blog8->setIsPublished(true);
    $manager->persist($blog8);

    $blog9 = new Blog();
    $blog9->setTitle('The grid - A digital frontier');
    $blog9->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
    $blog9->setImage('the_grid.jpg');
    $blog9->setAuteur('Kevin Flynn');
    $blog9->setCreated(new \DateTime("2011-06-02 18:54:12"));
    $blog9->setUpdated(new \DateTime("2013-06-02 18:54:12"));
    $blog9->setIsPublished(true);
    $manager->persist($blog9);

    $blog10 = new Blog();
    $blog10->setTitle('You\'re either a one or a zero. Alive or dead');
    $blog10->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
    $blog10->setImage('one_or_zero.jpg');
    $blog10->setAuteur('Gary Winston');
    $blog10->setCreated(new \DateTime("2011-04-25 15:34:18"));
    $blog10->setUpdated($blog10->getCreated());
    $blog10->setIsPublished(true);
    $manager->persist($blog10);

    $manager->flush();
  }

}
