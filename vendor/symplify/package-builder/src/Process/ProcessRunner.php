<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperaad82bb90a86\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoperaad82bb90a86\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoperaad82bb90a86\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
