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
mv composer.phar /usr/local/bin/composer
```
##### Setup Permisison

```sh
chmod +x /usr/local/bin/composer
```

##### Check for version and if it's installed properly
```sh
composer -v 
```


by Patryk Michno
