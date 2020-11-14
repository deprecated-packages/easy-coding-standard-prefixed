<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\Migrify\MigrifyKernel\Console;

use _PhpScoper4936962185e7\Symfony\Component\Console\Application;
use _PhpScoper4936962185e7\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper4936962185e7\Symfony\Component\Console\Application
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
