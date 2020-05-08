# Midnight-Plaza
Colorlib music templates implemented on slim 4
## install to webroot
clone to your htdocs
```sh
git clone <link>
```
move everything to `/var/www/html (webroot)`

then go to `/var/www/html` and install depencies
```sh
composer install --no-dev
yarn install
```
edit `/var/www/html/app/container.php`

comment this
```php
// $app->setBasepath();
```
start your webservice like apache or something like
```sh
php -S 127.0.0.1:8080 -t /var/www/html/public
```
## install to webroot/custom
clone to your htdocs
```sh
git clone <link>
```
move everything to `/var/www/html/custom (webroot)`

then go to `/var/www/html/custom` and install depencies
```sh
composer install --no-dev
yarn install
```
edit `/var/www/html/app/container.php`
do this
```php
$app->setBasepath('/custom');
```
start your webservice like apache or something like
```sh
php -S 127.0.0.1:8080 -t /var/www/html/custom/public
```
