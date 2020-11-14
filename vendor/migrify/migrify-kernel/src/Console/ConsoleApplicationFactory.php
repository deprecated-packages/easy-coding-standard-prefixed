<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console;

use _PhpScoperecb978830f1e\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperecb978830f1e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
