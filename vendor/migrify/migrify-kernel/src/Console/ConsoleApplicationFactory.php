<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\Console;

use _PhpScoper49c742f5a4ee\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper49c742f5a4ee\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
