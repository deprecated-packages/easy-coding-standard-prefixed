<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\MigrifyKernel\Console;

use _PhpScopera749ac204cd2\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScopera749ac204cd2\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScopera749ac204cd2\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
