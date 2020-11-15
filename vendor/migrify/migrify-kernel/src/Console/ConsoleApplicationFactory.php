<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\MigrifyKernel\Console;

use _PhpScopera189153e1f79\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScopera189153e1f79\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
