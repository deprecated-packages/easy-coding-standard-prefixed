<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console;

use _PhpScoperd4937ee9b515\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperd4937ee9b515\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
