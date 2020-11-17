<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\Console;

use _PhpScoper2a8ad010dfbd\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper2a8ad010dfbd\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
