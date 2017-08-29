# Php Config

A quick access to php.ini values

## Installation

```bash
$ composer require xgc/php-config
```

## Usage

```php
<?php
declare(strict_types=1);

use Xgc\PhpConfig\Config;

/*
 * Return the maximum file that can be uploaded in bytes
 */
echo Config::uploadMaxFileSize();
// 2097152

/*
 * Return the maximum post size
 */
echo Config::postMaxSize();
// 8388608

/*
 * Returns the value as is in php.ini
 */
echo Config::load(Config::POST_MAX_SIZE);
// 8M

/*
 * Other example
 */
echo Config::load('session.name');
// PHPSESSID

```
