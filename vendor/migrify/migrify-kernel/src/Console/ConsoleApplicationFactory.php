<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console;

use _PhpScopera4be459e5e3d\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScopera4be459e5e3d\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
