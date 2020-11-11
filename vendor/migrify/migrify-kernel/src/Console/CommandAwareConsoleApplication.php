<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\MigrifyKernel\Console;

use _PhpScoper0f5cd390c37a\Symfony\Component\Console\Application;
use _PhpScoper0f5cd390c37a\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper0f5cd390c37a\Symfony\Component\Console\Application
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
