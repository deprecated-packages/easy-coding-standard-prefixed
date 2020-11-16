<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console;

use _PhpScoperbcc0395698f8\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperbcc0395698f8\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
