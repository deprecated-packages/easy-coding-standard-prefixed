<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\MigrifyKernel\Console;

use _PhpScopere5e7dca8c031\Symfony\Component\Console\Application;
use _PhpScopere5e7dca8c031\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScopere5e7dca8c031\Symfony\Component\Console\Application
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
