<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console;

use _PhpScoperfacc742d2745\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperfacc742d2745\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
