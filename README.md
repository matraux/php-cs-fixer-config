# MATRAUX PHP code style
[![Latest Version on Packagist](https://img.shields.io/packagist/v/matraux/php-code-style.svg?logo=packagist&logoColor=white)](https://packagist.org/packages/matraux/php-code-style)
[![Last release](https://img.shields.io/github/v/release/matraux/php-code-style?display_name=tag&logo=github&logoColor=white)](https://github.com/matraux/php-code-style/releases)
[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg?logo=open-source-initiative&logoColor=white)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.4+-blue.svg?logo=php&logoColor=white)](https://php.net)
[![Security Policy](https://img.shields.io/badge/Security-Policy-blue?logo=bitwarden&logoColor=white)](./.github/SECURITY.md)
[![Contributing](https://img.shields.io/badge/Contributing-Disabled-lightgrey?logo=github&logoColor=white)](CONTRIBUTING.md)
[![QA Status](https://img.shields.io/github/actions/workflow/status/matraux/php-code-style/qa.yml?label=Quality+Assurance&logo=checkmarx&logoColor=white)](https://github.com/matraux/php-code-style/actions/workflows/qa.yml)
[![Issues](https://img.shields.io/github/issues/matraux/php-code-style?logo=github&logoColor=white)](https://github.com/matraux/php-code-style/issues)
[![Last Commit](https://img.shields.io/github/last-commit/matraux/php-code-style?logo=git&logoColor=white)](https://github.com/matraux/php-code-style/commits)

<br>

## Introduction
<!-- A PHP 8.4+ library for converting JSON data to typed entities and back, with support for lazy-loading collections, mutable data structures, and structured entity design.
Useful for structured JSON APIs, configuration parsing, and object-based manipulation of hierarchical JSON data. -->


<br>

## Features
<!-- - Object-oriented JSON mapping
- Conversion from JSON to typed entities and back
- Lazy-loading collections for efficient memory usage
- Entity objects are mutable and can be freely modified after creation
- Strict type support with automatic casting and codec transformations
- Native support for nested structures and arrays
- Easy integration with configuration or API responses -->

<br>

## Installation
```bash
composer require matraux/php-code-style
```

<br>

## Requirements
| version | PHP | Note |
| ---- | --- | --- |
| 1.0.0 | 7.4+ | Support PHP 7.4 |
| 2.0.0 | 8.3+ | Support PHP 8.3 |
| 3.0.0 | 8.4+ | Support PHP 8.4 |

<br>

## Examples

Create file `.php-cs-fixer.dist.php` or `.php-cs-fixer.php` in root.
```php
<?php declare(strict_types=1);

use Matraux\PhpCodeStyle\ConfigFactory;

return ConfigFactory::create(
	__DIR__ . '/src',
);
```

Run code style check
```bash
vendor/bin/php-cs-fixer check
```

Run code style fixer
```bash
vendor/bin/php-cs-fixer fix
```

<br>

## Development
See [Development](./docs/Development.md) for debug, test instructions, static analysis, and coding standards.

<br>

## Support
For bug reports and feature requests, please use the [issue tracker](https://github.com/matraux/php-code-style/issues).