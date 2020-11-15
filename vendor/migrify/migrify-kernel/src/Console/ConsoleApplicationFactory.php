<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Console;

use _PhpScoperd9c3b46af121\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperd9c3b46af121\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
