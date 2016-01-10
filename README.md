# Quiubas PHP Library

## Installation

Install **quiubas-php** via composer or by downloading the source.

#### Via Composer:

**quiubas-php** is available on Packagist as the
[`quiubas/quiubas-php`](http://packagist.org/packages/quiubas/quiubas-php) package.

#### Via ZIP file:

[Click here to download the source
(.zip)](https://github.com/quiubas/quiubas-php/zipball/master) which includes all
dependencies.

Move the quiubas-php folder to your project directory and then include the library file:

    require '/path/to/quiubas-php/quiubas.php';


## Quickstart

### Send an SMS

```php
<?php
// Install the library via Composer or download the .zip file to your project folder.
// Load the library
require('/path/to/quiubas-php/quiubas.php');

\Quiubas\Quiubas::setAuth( 'api_key', 'api_secret' );

$response = \Quiubas\SMS::send(array(
  'to_number' => '+52552512421',
  'message' => 'Hello there',
));

echo $response->sms_id;
```


## Requirements
- PHP 5.3+
- `openssl` extension
- `curl` extension
