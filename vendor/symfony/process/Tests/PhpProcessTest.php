<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5f75c22067b\Symfony\Component\Process\Tests;

use _PhpScoperf5f75c22067b\PHPUnit\Framework\TestCase;
use _PhpScoperf5f75c22067b\Symfony\Component\Process\PhpProcess;
class PhpProcessTest extends \_PhpScoperf5f75c22067b\PHPUnit\Framework\TestCase
{
    public function testNonBlockingWorks()
    {
        $expected = 'hello world!';
        $process = new \_PhpScoperf5f75c22067b\Symfony\Component\Process\PhpProcess(<<<PHP
<?php echo '{$expected}';
PHP
);
        $process->start();
        $process->wait();
        $this->assertEquals($expected, $process->getOutput());
    }
    public function testCommandLine()
    {
        $process = new \_PhpScoperf5f75c22067b\Symfony\Component\Process\PhpProcess(<<<'PHP'
<?php

namespace _PhpScoperf5f75c22067b;

echo \phpversion() . \PHP_SAPI;
PHP
);
        $commandLine = $process->getCommandLine();
        $process->start();
        $this->assertContains($commandLine, $process->getCommandLine(), '::getCommandLine() returns the command line of PHP after start');
        $process->wait();
        $this->assertContains($commandLine, $process->getCommandLine(), '::getCommandLine() returns the command line of PHP after wait');
        $this->assertSame(\phpversion() . \PHP_SAPI, $process->getOutput());
    }
}
