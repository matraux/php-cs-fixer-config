<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer\RuleSet\Sets;

use Matraux\PhpCsFixer\RuleSet\Definition;

final class Operators extends Definition
{
	public function getRules(): array
	{
		return [
			'binary_operator_spaces' => [
				'default' => 'single_space',
			],
			'unary_operator_spaces' => [
				'only_dec_inc' => false,
			],
			'strict_comparison' => true,
		];
	}

	public function isRisky(): bool
	{
		return true;
	}
}
