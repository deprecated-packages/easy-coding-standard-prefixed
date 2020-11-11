<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\MigrifyKernel\Console;

use _PhpScoper4f985154d5a0\Symfony\Component\Console\Application;
use _PhpScoper4f985154d5a0\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper4f985154d5a0\Symfony\Component\Console\Application
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
