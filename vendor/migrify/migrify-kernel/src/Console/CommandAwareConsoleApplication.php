<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\MigrifyKernel\Console;

use _PhpScopercda2b863d098\Symfony\Component\Console\Application;
use _PhpScopercda2b863d098\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScopercda2b863d098\Symfony\Component\Console\Application
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
