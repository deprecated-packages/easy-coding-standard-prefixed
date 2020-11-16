<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Console;

use _PhpScoper1103e00fb46b\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper1103e00fb46b\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
