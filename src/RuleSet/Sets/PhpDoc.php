<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle\RuleSet\Sets;

use Matraux\PhpCodeStyle\RuleSet\Definition;

final class PhpDoc extends Definition
{
	public function getRules(): array
	{
		return [
			'no_superfluous_phpdoc_tags' => [
				'allow_hidden_params' => true,
				'allow_mixed' => true,
				'remove_inheritdoc' => true,
			],
		];
	}
}
