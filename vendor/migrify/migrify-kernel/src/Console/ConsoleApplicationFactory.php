<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Console;

use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
