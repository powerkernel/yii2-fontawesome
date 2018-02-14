Yii2 Font Awesome
=================
Font Awesome extension for Yii2

[![Latest Stable Version](https://poser.pugx.org/powerkernel/yii2-fontawesome/v/stable)](https://packagist.org/packages/powerkernel/yii2-fontawesome)
[![Total Downloads](https://poser.pugx.org/powerkernel/yii2-fontawesome/downloads)](https://packagist.org/packages/powerkernel/yii2-fontawesome)
[![Build Status](https://travis-ci.org/powerkernel/yii2-fontawesome.svg?branch=master)](https://travis-ci.org/powerkernel/yii2-fontawesome)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist powerkernel/yii2-fontawesome "*"
```

or add

```
"powerkernel/yii2-fontawesome": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \powerkernel\fontawesome\Icon::widget([
        'prefix'=>'far',
        'name' => 'address-book',
        'size'=>'fa-5x',
        'styling'=>'fa-spin'
    ]) ?>
```
