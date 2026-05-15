<?php declare(strict_types=1);

namespace Matraux\PhpCsFixer\Test\Unit;

use Matraux\PhpCsFixer\Test\Support\UnitTester;
use Symfony\Component\Process\Process;

final class ConfigCest
{
	public function testFixCode(UnitTester $tester): void
	{
		$data = codecept_data_dir();
		$output = codecept_output_dir();
		$cwd = codecept_root_dir();

		$tester->assertIsString($data);
		$tester->assertIsString($output);
		$tester->assertIsString($cwd);

		$fixedFile = $data . 'FixedCode.php';
		$unfixedFile = $data . 'UnfixedCode.php';
		$tmpFile = $output . 'UnfixedCode.php';
		$config = $data . 'php-cs-fixer-config.php';

		copy($unfixedFile, $tmpFile);
		$tester->assertFileExists($tmpFile);

		$process = new Process(
			[
				PHP_BINARY,
				'vendor/bin/php-cs-fixer',
				'fix',
				'--config', $config,
				'--using-cache=no',
				$tmpFile,
			],
			$cwd
		);
		$process->mustRun();

		$tester->assertFileEquals($fixedFile, $tmpFile);
	}
}
