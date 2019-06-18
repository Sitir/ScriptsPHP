# Setup Php & Composer on Fedora

### Install Php

```sh
sudo dnf -y install php  php-cli php-fpm php-mysqlnd php-zip php-devel php-gd php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json
```
##### Check verion and if it's installed properly

```sh
php -v
```

### Install Composer Globaly
**Curl is needed!

##### Download and setup composer
```sh
curl -sS https://getcomposer.org/installer | php
```
##### Move composer to globaly localization(next step is required)
```sh
(sudo) mv composer.phar /usr/local/bin/composer
```
##### Setup Permisison

```sh
(sudo) chmod +x /usr/local/bin/composer
```

##### Check for version and if it's installed properly
```sh
composer -v 
```

##### Docker Compose file.
It contains mysql and php-my-admin to no need to install mysql and phpmyadmin localy, editing this file may give you <br/> flexiblity to add others databases engines etc. <br/>
**(Update 2019)**
No need to use php my admin but I will leave it, You can use MySQL Workbench.


by Patryk Michno
