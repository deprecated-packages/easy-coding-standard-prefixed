<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoper6c2f17c43d2d\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper6c2f17c43d2d\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoper6c2f17c43d2d\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoper6c2f17c43d2d\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
