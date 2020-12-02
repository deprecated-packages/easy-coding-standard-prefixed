<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc95ae4bf942a\Symfony\Component\Process\Tests;

use _PhpScoperc95ae4bf942a\PHPUnit\Framework\TestCase;
use _PhpScoperc95ae4bf942a\Symfony\Component\Process\PhpProcess;
class PhpProcessTest extends \_PhpScoperc95ae4bf942a\PHPUnit\Framework\TestCase
{
    public function testNonBlockingWorks()
    {
        $expected = 'hello world!';
        $process = new \_PhpScoperc95ae4bf942a\Symfony\Component\Process\PhpProcess(<<<PHP
<?php echo '{$expected}';
PHP
);
        $process->start();
        $process->wait();
        $this->assertEquals($expected, $process->getOutput());
    }
    public function testCommandLine()
    {
        $process = new \_PhpScoperc95ae4bf942a\Symfony\Component\Process\PhpProcess(<<<'PHP'
<?php

namespace _PhpScoperc95ae4bf942a;

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
