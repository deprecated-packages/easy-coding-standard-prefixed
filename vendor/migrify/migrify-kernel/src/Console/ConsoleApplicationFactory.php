<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\MigrifyKernel\Console;

use _PhpScoper279cf54b77ad\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper279cf54b77ad\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper279cf54b77ad\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
