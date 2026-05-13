<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle\RuleSet\Sets;

use Matraux\PhpCodeStyle\RuleSet\Definition;

final class Classes extends Definition
{
	public function getRules(): array
	{
		return [
			'no_redundant_readonly_property' => true,
			'ordered_class_elements' => [
				'order' => [
					'use_trait',
					'case',
					'constant_public',
					'constant_protected',
					'constant_private',
					'property_public_static',
					'property_public',
					'property_protected_static',
					'property_protected',
					'property_private_static',
					'property_private',
					'construct',
					'destruct',
					'method_public_abstract_static',
					'method_public_static',
					'method_public_abstract',
					'method_public',
					'method_protected_abstract_static',
					'method_protected_static',
					'method_protected_abstract',
					'method_protected',
					'method_private_abstract_static',
					'method_private',
					'magic',
				],
				'sort_algorithm' => 'none',
			],
			'class_attributes_separation' => [
				'elements' => [
					'const' => 'one',
					'property' => 'one',
					'method' => 'one',
					'trait_import' => 'none',
					'case' => 'none',
				],
			],
		];
	}
}
