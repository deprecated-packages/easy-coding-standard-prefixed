<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\Migrify\MigrifyKernel\Console;

use _PhpScoper0c236037eb04\Symfony\Component\Console\Application;
use _PhpScoper0c236037eb04\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper0c236037eb04\Symfony\Component\Console\Application
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
