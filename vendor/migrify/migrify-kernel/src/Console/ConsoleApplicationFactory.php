<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Console;

use _PhpScoperad4b7e2c09d8\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperad4b7e2c09d8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
