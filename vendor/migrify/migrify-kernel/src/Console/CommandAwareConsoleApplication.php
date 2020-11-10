<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\MigrifyKernel\Console;

use _PhpScoper48800f361566\Symfony\Component\Console\Application;
use _PhpScoper48800f361566\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper48800f361566\Symfony\Component\Console\Application
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
