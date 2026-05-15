<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer;

use Matraux\PhpCsFixer\RuleSet\Definition;
use Matraux\PhpCsFixer\RuleSet\Sets\Classes;
use Matraux\PhpCsFixer\RuleSet\Sets\Functions;
use Matraux\PhpCsFixer\RuleSet\Sets\Imports;
use Matraux\PhpCsFixer\RuleSet\Sets\Operators;
use Matraux\PhpCsFixer\RuleSet\Sets\PhpDoc;
use Matraux\PhpCsFixer\RuleSet\Sets\Syntax;
use PhpCsFixer\Finder;

final class Config extends \PhpCsFixer\Config
{
	public function __construct(string ...$paths)
	{
		parent::__construct();

		if (!empty($paths)) {
			$this->setFinder((new Finder())->in($paths));
		}

		/** @var list<Definition> $definitions */
		$definitions = [
			new Syntax(),
			new Imports(),
			new Operators(),
			new Functions(),
			new PhpDoc(),
			new Classes(),
		];

		/** @var array<string,true> */
		$rules = [
			'@PER-CS' => true,
			'@autoPHPMigration' => true,
		];
		foreach ($definitions as $definition) {
			$rules[$definition->getName()] = true;
		}

		$this->setRiskyAllowed(true)
			->setIndent("\t")
			->setLineEnding("\n")
			->registerCustomRuleSets($definitions)
			->setRules($rules);
	}
}
