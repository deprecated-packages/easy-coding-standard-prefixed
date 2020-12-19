<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Process;

use _PhpScoperd1a5bf00e83e\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperd1a5bf00e83e\Symfony\Component\Process\Process;
final class ProcessRunner
{
    /**
     * @param string[] $command
     */
    public function createAndRun(array $command, string $cwd, \_PhpScoperd1a5bf00e83e\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $process = new \_PhpScoperd1a5bf00e83e\Symfony\Component\Process\Process($command, $cwd, null, null, null);
        $process->mustRun(static function (string $type, string $buffer) use($output) : void {
            $output->write($buffer);
        });
    }
}
