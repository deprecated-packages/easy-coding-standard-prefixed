<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Console;

use _PhpScoperc753ccca5a0c\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperc753ccca5a0c\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
