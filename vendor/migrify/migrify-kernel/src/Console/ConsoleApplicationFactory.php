<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console;

use _PhpScoperedc2e0c967db\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperedc2e0c967db\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
