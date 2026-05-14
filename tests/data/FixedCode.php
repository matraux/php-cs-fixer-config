<?php declare(strict_types=1);

namespace Matraux\PhpCodeStyle\Tests\Data;

use DateTimeImmutable;
use RuntimeException;
use SomeVendor\Package\ExampleTrait;
use SomeVendor\Package\FirstClass;
use SomeVendor\Package\SecondClass;
use function strlen;
use const PHP_VERSION_ID;

final class Code
{
	use ExampleTrait;

	public const KIND = 'fixture';

	public static string $staticName = 'static';

	private string $name = ' ugly ';

	public function __construct()
	{
		$total = 1 + 2;
		$total++;
		!$total;

		$same = $total === 3;
		$different = $total !== 4;
		$integer = is_int($total);
		$double = is_float(1.0);
		$count = count(['x']);
		$text = rtrim('text ');

		echo $text;

		switch ($total) {
			case 1:
				break;
			default:
				return;
		}
	}

	public function convert(FirstClass $first, SecondClass $second, \ArrayObject $items, DateTimeImmutable $date): string
	{
		$empty = [];
		$values = ['first', 'second'];
		$needle = 'first';
		$index = array_search($needle, $values, true);
		$contains = in_array($needle, $values, true);
		$decoded = base64_decode('dGVzdA==', true);
		$length = strlen($needle);
		$version = PHP_VERSION_ID;
		$copy = clone $items;

		$mapped = array_map(fn(string $item): string => $item . $needle, $values);

		if (null === $index) {
			return 'missing';
		}
		return implode(',', $mapped);
	}

	public function format(string $value): string
	{
		return $value;
	}

	/**
	 * Generator method.
	 */
	public function generator(array $items): iterable
	{
		yield $items[0];

		yield from $items;
	}

	public function fail(): void
	{
		throw new RuntimeException('Failure.');
	}

	private function helper(): bool
	{
		if (!$this instanceof self) {
			return false;
		}

		return true;
	}
}
