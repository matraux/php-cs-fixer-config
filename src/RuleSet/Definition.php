<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle\RuleSet;

use PhpCsFixer\RuleSet\RuleSetDefinitionInterface;
use ReflectionClass;

abstract class Definition implements RuleSetDefinitionInterface
{
	public function getName(): string
	{
		$name = new ReflectionClass(static::class)->getShortName();

		return '@Matraux/' . $name;
	}

	public function getDescription(): string
	{
		return $this->getName() . ' rule set.';
	}

	public function isRisky(): bool
	{
		return false;
	}
}
