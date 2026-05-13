<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle\RuleSet\Sets;

use Matraux\PhpCodeStyle\RuleSet\Definition;

final class Functions extends Definition
{
	public function getRules(): array
	{
		return [
			'strict_param' => true,
			'no_alias_functions' => [
				'sets' => ['@internal'],
			],
			'is_null' => true,
			'use_arrow_functions' => true,
		];
	}

	public function isRisky(): bool
	{
		return true;
	}
}
