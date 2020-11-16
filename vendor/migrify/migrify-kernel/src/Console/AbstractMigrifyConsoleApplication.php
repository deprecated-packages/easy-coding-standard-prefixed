<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\MigrifyKernel\Console;

use _PhpScoperad4605bb9267\Nette\Utils\Strings;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Application;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Command\Command;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Descriptor\TextDescriptor;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Exception\RuntimeException;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperad4605bb9267\Symfony\Component\Console\Output\OutputInterface;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\PackageBuilder\Console\ShellCode;
abstract class AbstractMigrifyConsoleApplication extends \_PhpScoperad4605bb9267\Symfony\Component\Console\Application
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
    protected function doRunCommand(\_PhpScoperad4605bb9267\Symfony\Component\Console\Command\Command $command, \_PhpScoperad4605bb9267\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperad4605bb9267\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        return $this->doRunCommandAndShowHelpOnArgumentError($command, $input, $output);
    }
    protected function doRunCommandAndShowHelpOnArgumentError(\_PhpScoperad4605bb9267\Symfony\Component\Console\Command\Command $command, \_PhpScoperad4605bb9267\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperad4605bb9267\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        try {
            return parent::doRunCommand($command, $input, $output);
        } catch (\_PhpScoperad4605bb9267\Symfony\Component\Console\Exception\RuntimeException $runtimeException) {
            if (\_PhpScoperad4605bb9267\Nette\Utils\Strings::contains($runtimeException->getMessage(), 'Provide required arguments')) {
                $this->cleanExtraCommandArgument($command);
                $textDescriptor = new \_PhpScoperad4605bb9267\Symfony\Component\Console\Descriptor\TextDescriptor();
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
    private function cleanExtraCommandArgument(\_PhpScoperad4605bb9267\Symfony\Component\Console\Command\Command $command) : void
    {
        $arguments = $command->getDefinition()->getArguments();
        if (!isset($arguments[self::COMMAND])) {
            return;
        }
        unset($arguments[self::COMMAND]);
        $command->getDefinition()->setArguments($arguments);
    }
}
