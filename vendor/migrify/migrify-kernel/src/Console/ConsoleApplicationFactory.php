<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Console;

use _PhpScoper3e1e0e5bb8ef\Symfony\Component\Console\Command\Command;
final class ConsoleApplicationFactory
{
    /**
     * @var Command[]
     */
    private $commands = [];
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }
    public function create() : \_PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper3e1e0e5bb8ef\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
