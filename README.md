[![Latest Stable Version](https://poser.pugx.org/xgc/php-config/v/stable)](https://packagist.org/packages/xgc/php-config)
[![License](https://poser.pugx.org/xgc/php-config/license)](https://packagist.org/packages/xgc/php-config)
[![Build Status](https://travis-ci.org/xgc1986/php-config.svg?branch=master)](https://travis-ci.org/xgc1986/php-config)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/xgc1986/php-config/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/xgc1986/php-config/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/xgc1986/php-config/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/xgc1986/php-config/?branch=master)

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
 * Return the maximum post size in bytes
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
