<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Console;

use _PhpScoper967c4b7e296e\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper967c4b7e296e\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
