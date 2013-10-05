Anneaux - Portail Edition
=========================

Welcome to the Portail Edition - a totally-absolutely-not-fully-functional Symfony2
application that you can use at your risk !

This document contains information on how to download, install, and start
using this Symfony app. For a more detailed explanation, see also the [Installation][1]
chapter of the Symfony Documentation.


### Requirements

LAMP environnement (for this readme)
with PHP > 5.3     (needs verification, at least see symfony recommandation)


1) Installing the Anneaux - Portail Edition
-------------------------------------------

Go to your favorite dev directory (like '/home/goofy/awesome_project') then

> git clone https://github.com/jacbac/anneaux.git


### Use Composer (*recommended*)

You can use composer to get an updated project and (also) to install all the necessary dependencies.

If you don't have Composer yet, download it following the instructions on [getcomposer.org][2] or just run the following command in the 'anneaux' directory:

```
curl -s http://getcomposer.org/installer | php
php composer.phar update
php composer.phar install
```


### Checking your System Configuration

Before starting coding, make sure that your local system is properly configured for Symfony.

Execute the `check.php` script from the command line:

> php app/check.php

The script returns a status code of '0' if all mandatory requirements are met, '1' otherwise.

Access the `config.php` script from a browser:

> http://localhost/path/to/symfony/app/web/config.php

If you get any warnings or recommendations, fix them before moving on.



### Install assets

> php app/console assets:install (already automatically do in .phar install, nope ?)

and why not a little:

> php app/console assetic:dump

(assetic aspect will be next enhanced)



### Use Virtual hosting for apache

Open your hosts files

> sudo vim /etc/hosts

and add to it

> 127.0.0.1   anneaux

In /etc/apache2/sites-available directory (linux user), create a new vhost file:

> sudo vim anneaux

and copy this:

```
<VirtualHost *:80>
      ServerName anneaux
      DocumentRoot /home/[USER]/[YOUR_WORKSPACE]/anneaux/web

      DirectoryIndex app.php
      <Directory /home/[USER]/[YOUR_WORKSPACE]/anneaux/web/>
              Options Indexes FollowSymLinks MultiViews
              AllowOverride All
              Allow from All
      </Directory>

      ErrorLog /var/log/apache2/error.anneaux.log
      CustomLog /var/log/apache2/access.anneaux.log combined
</VirtualHost>
```

### Creating your database

You need to create a new database.

... WIP user/password and database.yml


### Load some dummy information in your base

... WIP load fixtures

Finally launch it in your favorite browser (IE6 for sure)

> anneaux/

Normally it works !

If not, uh... wait a minute, it's normally a semi-private project, you don't have to use this !
So if it not works fine at this step, you can throw your PC and go read a more enjoying book !



### Behat testing

... WIP








The next part is a partial copy of symfony README.md and yes I know this is outdated.

Next update soon.


What's inside?
---------------

The Symfony Standard Edition is configured with the following defaults:

  * Twig is the only configured template engine;
  * Doctrine ORM/DBAL is configured;
  * Swiftmailer is configured;
  * Annotations for everything are enabled.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **AnneauxPortailBundle** - My personnal bundle with some fixtures

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

My bundle is released under ... WIP.

Enjoy!

[1]:  http://symfony.com/doc/2.3/book/installation.html
[2]:  http://getcomposer.org/
[6]:  http://symfony.com/doc/2.3/bundles/SensioFrameworkExtraBundle/index.html
[7]:  http://symfony.com/doc/2.3/book/doctrine.html
[8]:  http://symfony.com/doc/2.3/book/templating.html
[9]:  http://symfony.com/doc/2.3/book/security.html
[10]: http://symfony.com/doc/2.3/cookbook/email.html
[11]: http://symfony.com/doc/2.3/cookbook/logging/monolog.html
[12]: http://symfony.com/doc/2.3/cookbook/assetic/asset_management.html
[13]: http://symfony.com/doc/2.3/bundles/SensioGeneratorBundle/index.html
