<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\MigrifyKernel\Console;

use _PhpScoper3d6b50c3ca2f\Symfony\Component\Console\Application;
use _PhpScoper3d6b50c3ca2f\Symfony\Component\Console\Command\Command;
final class CommandAwareConsoleApplication extends \_PhpScoper3d6b50c3ca2f\Symfony\Component\Console\Application
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
