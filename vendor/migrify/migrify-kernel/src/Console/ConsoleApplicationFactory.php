<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console;

use _PhpScoperddde3ba4aebc\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoperddde3ba4aebc\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
