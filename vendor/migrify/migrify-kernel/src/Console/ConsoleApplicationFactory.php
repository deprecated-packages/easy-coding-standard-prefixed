<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console;

use _PhpScoperb6d4bd368bd9\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperb6d4bd368bd9\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
