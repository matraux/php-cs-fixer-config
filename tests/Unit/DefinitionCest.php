<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer\Test\Unit;

use Matraux\PhpCsFixer\RuleSet\Sets\Classes;
use Matraux\PhpCsFixer\RuleSet\Sets\Functions;
use Matraux\PhpCsFixer\RuleSet\Sets\Imports;
use Matraux\PhpCsFixer\RuleSet\Sets\Operators;
use Matraux\PhpCsFixer\RuleSet\Sets\PhpDoc;
use Matraux\PhpCsFixer\RuleSet\Sets\Syntax;
use Matraux\PhpCsFixer\Test\Support\UnitTester;

final class DefinitionCest
{
	public function testGetName(UnitTester $tester): void
	{
		[$classes, $functions, $imports, $operators, $phpDoc, $syntax] = self::getDefinitions();

		$tester->assertEquals('@Matraux/Classes', $classes->getName());
		$tester->assertEquals('@Matraux/Functions', $functions->getName());
		$tester->assertEquals('@Matraux/Imports', $imports->getName());
		$tester->assertEquals('@Matraux/Operators', $operators->getName());
		$tester->assertEquals('@Matraux/PhpDoc', $phpDoc->getName());
		$tester->assertEquals('@Matraux/Syntax', $syntax->getName());
	}

	public function testGetDescription(UnitTester $tester): void
	{
		[$classes, $functions, $imports, $operators, $phpDoc, $syntax] = self::getDefinitions();

		$tester->assertEquals('@Matraux/Classes rule set.', $classes->getDescription());
		$tester->assertEquals('@Matraux/Functions rule set.', $functions->getDescription());
		$tester->assertEquals('@Matraux/Imports rule set.', $imports->getDescription());
		$tester->assertEquals('@Matraux/Operators rule set.', $operators->getDescription());
		$tester->assertEquals('@Matraux/PhpDoc rule set.', $phpDoc->getDescription());
		$tester->assertEquals('@Matraux/Syntax rule set.', $syntax->getDescription());
	}

	public function testGetRules(UnitTester $tester): void
	{
		foreach (self::getDefinitions() as $definition) {
			$tester->assertNotEmpty($definition->getRules());
		}
	}

	public function testIsRisky(UnitTester $tester): void
	{
		[$classes, $functions, $imports, $operators, $phpDoc, $syntax] = self::getDefinitions();

		$tester->assertEquals(false, $classes->isRisky());
		$tester->assertEquals(true, $functions->isRisky());
		$tester->assertEquals(false, $imports->isRisky());
		$tester->assertEquals(true, $operators->isRisky());
		$tester->assertEquals(false, $phpDoc->isRisky());
		$tester->assertEquals(true, $syntax->isRisky());
	}

	/**
	 * @return array{Classes,Functions,Imports,Operators,PhpDoc,Syntax}
	 */
	private static function getDefinitions(): array
	{
		return [
			new Classes(),
			new Functions(),
			new Imports(),
			new Operators(),
			new PhpDoc(),
			new Syntax(),
		];
	}
}
