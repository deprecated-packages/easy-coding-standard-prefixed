<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\MigrifyKernel\Console;

use _PhpScoper2fe14d6302bc\Symfony\Component\Console\Application;
use _PhpScoper2fe14d6302bc\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper2fe14d6302bc\Symfony\Component\Console\Application
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
