<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\MigrifyKernel\Console;

use _PhpScoper229e8121cf9f\Symfony\Component\Console\Application;
use _PhpScoper229e8121cf9f\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper229e8121cf9f\Symfony\Component\Console\Application
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
