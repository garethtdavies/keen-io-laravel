# Keen.io Laravel Helper

A service provider and facade to set up and use the Keen.io PHP library in Laravel 5.

[![Build Status](https://travis-ci.org/garethtdavies/keen-io-laravel.svg?branch=master)](https://travis-ci.org/garethtdavies/keen-io-laravel)
[![Total Downloads](https://poser.pugx.org/wensleydale/keen-io-laravel/downloads)](https://packagist.org/packages/wensleydale/keen-io-laravel)
[![License](https://poser.pugx.org/wensleydale/keen-io-laravel/license)](https://packagist.org/packages/wensleydale/keen-io-laravel)

This package consists of a service provider, which binds an instance of an initialized Keen.io client to the 
IoC-container and a Keen facade so you may access all methods of the Keen-io class via the syntax:

```php
$event = ['purchase' => ['item' => 'Golden Elephant']];

Keen::addEvent('purchases', $event);
```

You should refer to the [Keen PHP client](https://github.com/keenlabs/KeenClient-PHP) for full details about all 
available methods. 

## Setup

1. Install the 'wensleydale/keen-io-laravel' package

    Note, this will also install the required keen-io/keen-io package.

    ```shell
    $ composer require wensleydale/keen-io-laravel:1.*
    ```
    
2. Update 'config/app.php'
  
    ```php
    # Add `KeenLaravelServiceProvider` to the `providers` array
    'providers' => array(
        ...
        Wensleydale\KeenLaravel\KeenLaravelServiceProvider::class,
    )

    # Add the `KeenFacade` to the `aliases` array
    'aliases' => array(
        ...
        'Keen' => Wensleydale\KeenLaravel\KeenFacade::class,
    )
    ```

3. Publish the configuration file (creates keen.php in config directory) and add project ID and API keys.

	```shell
    $ php artisan vendor:publish
    ```

### Type Hinting

If you do not wish to make use of the Keen facade you may simply "type-hint" the KeenIOClient dependency in the 
constructor of a class that is resolved by the IoC container and an instantiated client will be ready for use.


```php
use KeenIO\Client\KeenIOClient;

private $client;

public function __construct(KeenIOClient $client)
{
    $this->client = $client;
}

public function addEvent()
{
	$event = ['purchase' => ['item' => 'Golden Elephant']];    

	$this->client->addEvent('purchases', $event);
    
    //Or overwrite defaults
    $this->client->setProjectId('new-project-id');
}
```
