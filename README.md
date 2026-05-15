# MATRAUX PHP-CS-Fixer config
[![Latest Version on Packagist](https://img.shields.io/packagist/v/matraux/php-cs-fixer-config.svg?logo=packagist&logoColor=white)](https://packagist.org/packages/matraux/php-cs-fixer-config)
[![Last release](https://img.shields.io/github/v/release/matraux/php-cs-fixer-config?display_name=tag&logo=github&logoColor=white)](https://github.com/matraux/php-cs-fixer-config/releases)
[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg?logo=open-source-initiative&logoColor=white)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.3+-blue.svg?logo=php&logoColor=white)](https://php.net)
[![Security Policy](https://img.shields.io/badge/Security-Policy-blue?logo=bitwarden&logoColor=white)](./.github/SECURITY.md)
[![Contributing](https://img.shields.io/badge/Contributing-Disabled-lightgrey?logo=github&logoColor=white)](CONTRIBUTING.md)
[![QA Status](https://img.shields.io/github/actions/workflow/status/matraux/php-cs-fixer-config/qa.yml?label=Quality+Assurance&logo=checkmarx&logoColor=white)](https://github.com/matraux/php-cs-fixer-config/actions/workflows/qa.yml)
[![Issues](https://img.shields.io/github/issues/matraux/php-cs-fixer-config?logo=github&logoColor=white)](https://github.com/matraux/php-cs-fixer-config/issues)
[![Last Commit](https://img.shields.io/github/last-commit/matraux/php-cs-fixer-config?logo=git&logoColor=white)](https://github.com/matraux/php-cs-fixer-config/commits)

<br>

## Introduction
A PHP 8.3+ package that provides the shared MATRAUX configuration for `friendsofphp/php-cs-fixer`.

It exposes a ready-to-use `Matraux\PhpCsFixer\Config` for project `.php-cs-fixer.dist.php` files and reusable grouped rule sets for custom PHP-CS-Fixer configurations.

Useful for keeping formatting, imports, strict typing, class layout, PHPDoc cleanup, indentation, and line endings consistent across multiple PHP packages.

<br>

## Features
- Ready-to-use PHP-CS-Fixer configuration via `Matraux\PhpCsFixer\Config`
- Public grouped rule sets for syntax, imports, operators, functions, PHPDoc, and classes
- PER-CS baseline with automatic PHP migration rules
- Strict typing, strict comparisons, strict parameters, and function alias cleanup
- Import ordering, unused import removal, and fully qualified type normalization
- Class member ordering and class element separation
- Tabs and LF line endings configured by default
- Risky PHP-CS-Fixer rules enabled explicitly

<br>

## Installation
```bash
composer require --dev matraux/php-cs-fixer-config
```

<br>

## Requirements
| version | PHP | Note |
| ---- | --- | --- |
| 1.0.0 | 8.3+ | Support PHP 8.3 |

<br>

## Examples

### Full configuration
Create file `.php-cs-fixer.dist.php` or `.php-cs-fixer.php` in root.
```php
<?php declare(strict_types=1);

use Matraux\PhpCsFixer\Config;

return new Config(__DIR__ . '/src');
```

### Custom PHP-CS-Fixer configuration
```php
<?php declare(strict_types=1);

use Matraux\PhpCsFixer\RuleSet\Sets\Imports;
use Matraux\PhpCsFixer\RuleSet\Sets\PhpDoc;
use PhpCsFixer\Config;

$imports = new Imports();
$phpDoc = new PhpDoc();

return (new Config())
	->registerCustomRuleSets([
		$imports,
		$phpDoc,
	])
	->setRules([
		'@PER-CS' => true,
		$imports->getName() => true,
		$phpDoc->getName() => true,
	]);
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

## Visual Studio Code
Visual Studio Code format setup is documented in [Visual Studio Code](./docs/VisualStudioCode.md).


## Development
See [Development](./docs/Development.md) for debug, static analysis, and coding standards.

<br>

## Support
For bug reports and feature requests, please use the [issue tracker](https://github.com/matraux/php-cs-fixer-config/issues).