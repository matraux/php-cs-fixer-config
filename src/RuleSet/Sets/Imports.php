<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer\RuleSet\Sets;

use Matraux\PhpCsFixer\RuleSet\Definition;

final class Imports extends Definition
{
	public function getRules(): array
	{
		return [
			'blank_line_between_import_groups' => false,
			'no_unneeded_import_alias' => true,
			'no_unused_imports' => true,
			'fully_qualified_strict_types' => [
				'import_symbols' => true,
			],
			'ordered_imports' => [
				'imports_order' => [
					'class',
					'function',
					'const',
				],
				'sort_algorithm' => 'alpha',
			],
			'single_line_after_imports' => true,
			'single_import_per_statement' => [
				'group_to_single_imports' => true,
			],
		];
	}
}
