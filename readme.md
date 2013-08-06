# CodeIgniter Project Starter

**ci-starter v1.0 (Aug 05, 2013) by Ale Mohamad**

## About the project

This is a custom "project starter" curated by myself (Ale Mohamad) for myself.  
I do not expect that this project will be useful for everyone, so leave it to your decision on using it or not. If you like this project, feel free to use it and tell me what you think.

## Requirements

This project needs a LAMP setup to have optimal performance.  
Also the server must have at least PHP 5.3 or higher, and must have mod_rewrite enabled.

## Basic configuration

### /application/config/config.php

[Generate an encryption key.](https://www.random.org/passwords/?num=1&len=24&format=html&rnd=new)

```php
$config['encryption_key'] = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
```

### /application/config/database.php

Set up the database information.

```php
$db['default']['hostname'] = 'localhost';  
$db['default']['username'] = 'username';  
$db['default']['password'] = 'password';  
$db['default']['database'] = 'database';  
$db['default']['dbdriver'] = 'mysql';  
$db['default']['dbprefix'] = 'prefix_';
```

**Note:** If not using a database, you must remove the configuration from the **/application/config/autoload.php** file.

### /application/config/constants.php

Modify the constants for the Admin.

```php
define('ADMIN_PROJECT',     'Project Name');  
define('ADMIN_CLIENT',      'Ale Mohamad');
```

### /assets/data/base.sql

Run the SQL command to create the settings table. Rename the 'project_settings' table name for the proper one (it has to be '< prefix >_settings').

```sql
CREATE TABLE IF NOT EXISTS `project_settings` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  `name` VARCHAR(255) DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT 1,
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
```

## What you will find in this starter kit?

* [CodeIgniter v2.1.4](http://ellislab.com/codeigniter) (EllisLab)
* [MY_Model](https://github.com/jamierumbelow/codeigniter-base-model) (Jamie Rumbelow)
* [MY_Controller](https://github.com/jamierumbelow/codeigniter-base-controller) (Jamie Rumbelow)
* MY_Router (modified version)
* [ci-feed](https://github.com/RoumenDamianoff/ci-feed) (Roumen Damianoff)
* [ci-sitemap](https://github.com/RoumenDamianoff/ci-sitemap) (Roumen Damianoff)
* [Image_moo](http://www.matmoo.com/digital-dribble/codeigniter/image_moo/) (Image manipulation library)
* [Google Analytics Api library](https://github.com/chonthu/Codeigniter-Google-Analytics-Class) (Nithin Meppurathu)
* [Gravatar library](https://github.com/rsmarshall/Codeigniter-Gravatar) (Ryan Marshall)
* am_helper (custom helper)
* [Bootstrap v2.3.2](http://getbootstrap.com/2.3.2/) (Mark Otto + jacob)

## About me

You can reach me at [http://alemohamad.com/](http://alemohamad.com/) if you want to work with me or talk about this project.

![Ale Mohamad](http://codeigniter.alemohamad.com/images/logo2012am.png)
