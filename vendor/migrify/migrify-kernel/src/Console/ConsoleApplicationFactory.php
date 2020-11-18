<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\MigrifyKernel\Console;

use _PhpScoperf77bffce0320\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperf77bffce0320\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperf77bffce0320\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
