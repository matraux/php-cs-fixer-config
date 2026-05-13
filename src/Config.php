<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle;

use Matraux\PhpCodeStyle\RuleSet\Definition;
use Matraux\PhpCodeStyle\RuleSet\Sets\Classes;
use Matraux\PhpCodeStyle\RuleSet\Sets\Functions;
use Matraux\PhpCodeStyle\RuleSet\Sets\Imports;
use Matraux\PhpCodeStyle\RuleSet\Sets\Operators;
use Matraux\PhpCodeStyle\RuleSet\Sets\PhpDoc;
use Matraux\PhpCodeStyle\RuleSet\Sets\Syntax;
use PhpCsFixer\Finder;

final class Config extends \PhpCsFixer\Config
{
	public function __construct(string ...$paths)
	{
		parent::__construct();

		if (!empty($paths)) {
			$this->setFinder(new Finder()->in($paths));
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
