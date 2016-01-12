# Quiubas PHP Library

## Requirements
- PHP 5.3+
- `openssl` extension
- `curl` extension

## Installation

Install **quiubas-php** via composer or by downloading the source.

## Via Composer

You can install the bindings via [Composer](http://getcomposer.org/) [`quiubas/quiubas-php`](http://packagist.org/packages/quiubas/quiubas-php). Run the following command:

```bash
composer require quiubas/quiubas-php
```

To use the library, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/quiubas/quiubas-php/zipball/master). Then, to use the library, include the `quiubas.php` file.

```php
require_once('/path/to/quiubas-php/quiubas.php');
```

## Quickstart

### Send an SMS

```php
<?php
// Install the library via Composer or download the .zip file to your project folder.
// Load the library
require_once '/path/to/quiubas-php/quiubas.php';

\Quiubas\Quiubas::setAuth( 'api_key', 'api_secret' );
s
$response = \Quiubas\SMS::send(array(
  'to_number' => '+52552512421',
  'message' => 'Hello there',
));

echo $response->sms_id;
```
