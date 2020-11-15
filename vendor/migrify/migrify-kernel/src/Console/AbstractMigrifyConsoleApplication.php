<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\MigrifyKernel\Console;

use _PhpScoper21763e6c7ac4\Nette\Utils\Strings;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Application;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Descriptor\TextDescriptor;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Exception\RuntimeException;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper21763e6c7ac4\Symfony\Component\Console\Output\OutputInterface;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
abstract class AbstractMigrifyConsoleApplication extends \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Application
{
    /**
     * @var string
     */
    private const COMMAND = 'command';
    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands, string $name = 'UNKNOWN', string $version = 'UNKNOWN')
    {
        $this->addCommands($commands);
        parent::__construct($name, $version);
    }
    /**
     * Add names to all commands by class-name convention
     * @param Command[] $commands
     */
    public function addCommands(array $commands) : void
    {
        foreach ($commands as $command) {
            $commandName = \Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(\get_class($command));
            $command->setName($commandName);
        }
        parent::addCommands($commands);
    }
    protected function doRunCommand(\_PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command $command, \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doRunCommandAndShowHelpOnArgumentError($command, $input, $output);
    }
    protected function doRunCommandAndShowHelpOnArgumentError(\_PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command $command, \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        try {
            return parent::doRunCommand($command, $input, $output);
        } catch (\_PhpScoper21763e6c7ac4\Symfony\Component\Console\Exception\RuntimeException $runtimeException) {
            if (\_PhpScoper21763e6c7ac4\Nette\Utils\Strings::contains($runtimeException->getMessage(), 'Provide required arguments')) {
                $this->cleanExtraCommandArgument($command);
                $textDescriptor = new \_PhpScoper21763e6c7ac4\Symfony\Component\Console\Descriptor\TextDescriptor();
                $textDescriptor->describe($output, $command);
                return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
            }
            throw $runtimeException;
        }
    }
    /**
     * Sometimes there is "command" argument,
     * not really needed on fail of missing argument
     */
    private function cleanExtraCommandArgument(\_PhpScoper21763e6c7ac4\Symfony\Component\Console\Command\Command $command) : void
    {
        $arguments = $command->getDefinition()->getArguments();
        if (!isset($arguments[self::COMMAND])) {
            return;
        }
        unset($arguments[self::COMMAND]);
        $command->getDefinition()->setArguments($arguments);
    }
}
