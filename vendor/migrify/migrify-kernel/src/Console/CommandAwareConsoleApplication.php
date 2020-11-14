<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\MigrifyKernel\Console;

use _PhpScoperb09c3ec8e01a\Symfony\Component\Console\Application;
use _PhpScoperb09c3ec8e01a\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoperb09c3ec8e01a\Symfony\Component\Console\Application
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
