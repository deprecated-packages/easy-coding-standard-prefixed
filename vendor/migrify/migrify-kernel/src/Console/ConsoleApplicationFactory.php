<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\Console;

use _PhpScoper8e2d8a2760d1\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper8e2d8a2760d1\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
