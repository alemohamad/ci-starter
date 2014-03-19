# CodeIgniter Project Starter

**ci-starter by Ale Mohamad**

## About the project

This is a custom *project starter* curated by myself (Ale Mohamad) for myself.  
I do not expect that this project will be useful for everyone, so leave it to your decision on using it or not. If you like this project, feel free to use it and please tell me what you think.

## Requirements

This project needs a LAMP setup to have optimal performance.  
Also the server must have at least PHP 5.3 or higher, and must have mod_rewrite enabled.

## Basic configuration

### /application/config/config.php

[Generate an encryption key.](https://www.random.org/passwords/?num=1&len=24&format=html&rnd=new)

```php
$config['encryption_key'] = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
```

Configure the session settings for the project.

```php
$config['sess_cookie_name']		= 'project_session'; // use your project codename
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= TRUE; // when the user closes the window it expires
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= TRUE; // set to TRUE so you can use the DB
$config['sess_table_name']		= 'sessions'; // table name for sessions management
$config['sess_match_ip']		= FALSE; // if TRUE it can block some users in the same network
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;
```

### /application/config/database.php

Set up the database information.

```php
$db['default']['hostname'] = 'localhost';  
$db['default']['username'] = 'username';  
$db['default']['password'] = 'password';  
$db['default']['database'] = 'database';  
$db['default']['dbdriver'] = 'mysqli';  
$db['default']['dbprefix'] = 'prefix_';
```

**Note:** If not using a database, you must remove the Database Library from the ```/application/config/autoload.php``` file and turn the ```sess_use_database``` session option to ```FALSE```.

### /application/config/constants.php

Modify the constants for the Admin.

```php
define('ADMIN_PROJECT',       'Project name');
define('ADMIN_PROJECT_CODE',  'project');
define('ADMIN_CLIENT',        'Ale Mohamad');
define('ADMIN_PRIMARY_EMAIL', 'user@server.com');
define('ADMIN_LANGUAGE',      'en');
define('ADMIN_MULTIUSER',     FALSE);
define('ADMIN_CLEAR_CACHE',   FALSE);
define('ADMIN_DB_BACKUP',     FALSE);
define('MAINTENANCE_MODE',    FALSE);
```

### /assets/data/base.sql

Run the SQL command to create the settings table. Rename the ```project_settings``` table name for the proper one (it has to be '```<prefix>```_settings').

```sql
CREATE TABLE IF NOT EXISTS `project_settings` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  `name` VARCHAR(255) DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `permissions` text NOT NULL,
  `theme` varchar(255) DEFAULT 'default',
  `pagination` int(11) DEFAULT 10,
  `reset_token` varchar(64) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  `last_login` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
```

Do the same with the sessions table. Rename the ```project_sessions``` table name for the proper one (it has to be '```<prefix>```_sessions').

```sql
CREATE TABLE IF NOT EXISTS  `project_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## What will you find in this starter kit?

* [CodeIgniter v2.1.4](http://ellislab.com/codeigniter) (EllisLab)
* [MY_Model](https://github.com/jamierumbelow/codeigniter-base-model) (Jamie Rumbelow)
* [MY_Controller](https://github.com/jamierumbelow/codeigniter-base-controller) (Jamie Rumbelow) *
* [MY_Output](https://github.com/danmurf/CI-MY_Output) (Dan Murfitt)
* [Image_moo v1.1.6](https://github.com/Mat-Moo/image_moo) (Matthew Augier)
* [Basic CodeIgniter Authentication](https://github.com/joelvardy/Basic-CodeIgniter-Authentication) (Joel Vardy)
* [Formulize](https://github.com/alemohamad/ci-formulize) (Ale Mohamad)
* [ci-slug](https://github.com/alemohamad/ci-slug) (Ale Mohamad)
* [ci-csv](https://github.com/alemohamad/ci-csv) (Ale Mohamad)
* [ci-feed](https://github.com/RoumenDamianoff/ci-feed) (Roumen Damianoff)
* [ci-sitemap](https://github.com/RoumenDamianoff/ci-sitemap) (Roumen Damianoff)
* [Google Analytics Api library](https://github.com/chonthu/Codeigniter-Google-Analytics-Class) (Nithin Meppurathu)
* [Gravatar library](https://github.com/rsmarshall/Codeigniter-Gravatar) (Ryan Marshall)
* [CodeIgniter Database backup Model](https://github.com/psradich/CI_DatabaseBackup) (psradich)
* [CodeIgniter Unzip](https://github.com/philsturgeon/codeigniter-unzip) (Phil Sturgeon)
* [bootstrap-wysihtml5](https://github.com/jhollingworth/bootstrap-wysihtml5/) (James Hollingworth)
* [tablesorter v2.14.4](https://github.com/Mottie/tablesorter) (Rob G)
* [Tags Manager v3.0](https://github.com/max-favilli/tagmanager) (Max Favilli)
* [Spectrum v1.1.1](https://github.com/bgrins/spectrum) (Brian Grinstead)
* [ms-Dropdown v3.5.2](https://github.com/marghoobsuleman/ms-Dropdown) (Marghoob Suleman)
* [FileDrop v2](https://github.com/ProgerXP/FileDrop) (Pavel)
* [Adminer v4.0.3](https://github.com/vrana/adminer/) (Jakub Vrána)
* [Font Awesome v4.0.3](http://fontawesome.io/) (Fort Awesome)
* [Bootstrap v3.0.3](http://getbootstrap.com/) (Mark Otto + jacob)

## About me

You can reach me at [http://alemohamad.com/](http://alemohamad.com/) if you want to work with me or talk about this project.

![Ale Mohamad](http://alemohamad.com/github/logo2012am.png)

## License

[Released under the MIT License (MIT)](http://www.opensource.org/licenses/mit-license.html)

Copyright (c) 2014 Ale Mohamad

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
