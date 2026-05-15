<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer\RuleSet\Sets;

use Matraux\PhpCsFixer\RuleSet\Definition;

final class Syntax extends Definition
{
	public function getRules(): array
	{
		return [
			'declare_strict_types' => true,
			'blank_line_after_opening_tag' => false,
			'linebreak_after_opening_tag' => false,
			'single_blank_line_at_eof' => true,
			'no_empty_statement' => true,
			'no_unneeded_control_parentheses' => [
				'statements' => [
					'break',
					'clone',
					'continue',
					'echo_print',
					'negative_instanceof',
					'others',
					'return',
					'switch_case',
					'yield',
					'yield_from',
				],
			],
			'no_useless_else' => true,
			'no_extra_blank_lines' => [
				'tokens' => [
					'attribute',
					'break',
					'case',
					'comma',
					'continue',
					'curly_brace_block',
					'default',
					'extra',
					'parenthesis_brace_block',
					'return',
					'square_brace_block',
					'switch',
					'throw',
					'use',
				],
			],
			'type_declaration_spaces' => [
				'elements' => ['function', 'property', 'constant'],
			],
			'trim_array_spaces' => true,
			'no_whitespace_in_empty_array' => true,
			'no_singleline_whitespace_before_semicolons' => true,
		];
	}

	public function isRisky(): bool
	{
		return true;
	}
}
