<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\MigrifyKernel\Console;

use _PhpScoper06c66bea2cf6\Symfony\Component\Console\Application;
use _PhpScoper06c66bea2cf6\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper06c66bea2cf6\Symfony\Component\Console\Application
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
