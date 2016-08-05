![Marketcloud](http://www.marketcloud.it/img/logo_1200.png)
# PHP + Marketcloud eCommerce starter
PHP starter eCommerce project with Marketcloud as backend



[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/Marketcloud/marketcloud-php-starter)

## Demo
http://marketcloud-php.herokuapp.com
## Features
* Built on plain PHP, plus the Marketcloud node client
* Composer depenencies
* Boostrap3 based frontend plus some JQuery
* Easily replace the small JQuery code with your favorite Javascript framework like React/Angular/Angular2

## Requirements
You will need php and git

## Installation

Clone the respository to your local machine
```
cd to/the/directory/
composer install
```
Every Marketcloud application has a pair of public and secret key that are used to make requests. To find your application's keys, go at https://www.marketcloud.it/applications click on the arrow at the right corner of your application's box and then click on _properties_ . Here you can see your app's keys.

The bootstrap_shop.php script look for these keys in your environment, so you have to set the variables in your system:
```
export MARKETCLOUD_PUBLIC_KEY="your-public-key";
export MARKETCLOUD_SECRET_KEY="your-secret-key";
```

Now you can run the app with
```
php -S localhost:8000
```
or using your favorite web server.
