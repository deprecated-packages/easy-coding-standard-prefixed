<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\Migrify\MigrifyKernel\Console;

use _PhpScoper836bc32aecc2\Symfony\Component\Console\Application;
use _PhpScoper836bc32aecc2\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper836bc32aecc2\Symfony\Component\Console\Application
{
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands)
    {
        $this->addCommands($commands);
        parent::__construct();
    }
}
