<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\MigrifyKernel\Console;

use _PhpScoper70072c07b02b\Symfony\Component\Console\Command\Command;
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
    public function create() : \_PhpScoper70072c07b02b\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication
    {
        return new \_PhpScoper70072c07b02b\Migrify\MigrifyKernel\Console\AutowiredConsoleApplication($this->commands);
    }
}
