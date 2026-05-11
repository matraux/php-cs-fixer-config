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
A PHP 8.4+ library that provides the shared MATRAUX PHP-CS-Fixer configuration.
It exposes a ready-to-use `ConfigFactory` for project `.php-cs-fixer.dist.php` files and reusable `Rules` presets for custom configurations.

Useful for keeping code style, imports, strict typing, class layout, PHPDoc cleanup, indentation, and line endings consistent across multiple PHP packages.

<br>

## Features
- Ready-to-use PHP-CS-Fixer configuration via `ConfigFactory::create()`
- Reusable rules through `Rules::All` and grouped rule sets
- PER-CS baseline with automatic PHP migration rules
- Strict typing, strict comparisons, strict parameters, and function alias cleanup
- Import ordering, unused import removal, and fully qualified type normalization
- Class member ordering and class element separation
- Tabs and LF line endings configured by default
- Risky PHP-CS-Fixer rules enabled explicitly
- Stable cache file per configured path set

<br>

## Installation
```bash
composer require --dev matraux/php-code-style
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
See [Development](./docs/Development.md) for debug, static analysis, and coding standards.

<br>

## Support
For bug reports and feature requests, please use the [issue tracker](https://github.com/matraux/php-code-style/issues).