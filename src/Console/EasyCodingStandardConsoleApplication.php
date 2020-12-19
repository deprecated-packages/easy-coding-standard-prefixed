<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console;

use _PhpScopera8f555a7493c\Composer\XdebugHandler\XdebugHandler;
use _PhpScopera8f555a7493c\Jean85\PrettyVersions;
use _PhpScopera8f555a7493c\Symfony\Component\Console\Command\Command;
use _PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputDefinition;
use _PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputInterface;
use _PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputOption;
use _PhpScopera8f555a7493c\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter;
use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Configuration\Exception\NoCheckersLoadedException;
use Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication;
use Throwable;
final class EasyCodingStandardConsoleApplication extends \Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication
{
    /**
     * @var Configuration
     */
    private $configuration;
    /**
     * @var NoCheckersLoaderReporter
     */
    private $noCheckersLoaderReporter;
    /**
     * @param Command[] $commands
     */
    public function __construct(\Symplify\EasyCodingStandard\Configuration\Configuration $configuration, \Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter $noCheckersLoaderReporter, array $commands)
    {
        $version = \_PhpScopera8f555a7493c\Jean85\PrettyVersions::getVersion('symplify/easy-coding-standard');
        parent::__construct($commands, 'EasyCodingStandard', $version->getPrettyVersion());
        $this->configuration = $configuration;
        $this->noCheckersLoaderReporter = $noCheckersLoaderReporter;
    }
    public function doRun(\_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputInterface $input, \_PhpScopera8f555a7493c\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        // @fixes https://github.com/rectorphp/rector/issues/2205
        $isXdebugAllowed = $input->hasParameterOption('--xdebug');
        if (!$isXdebugAllowed && !\defined('PHPUNIT_COMPOSER_INSTALL')) {
            $xdebugHandler = new \_PhpScopera8f555a7493c\Composer\XdebugHandler\XdebugHandler('ecs', '--ansi');
            $xdebugHandler->check();
            unset($xdebugHandler);
        }
        // skip in this case, since generate content must be clear from meta-info
        if ($this->shouldPrintMetaInformation($input)) {
            $output->writeln($this->getLongVersion());
        }
        $firstResolvedConfigFileInfo = $this->configuration->getFirstResolvedConfigFileInfo();
        if ($firstResolvedConfigFileInfo !== null && $this->shouldPrintMetaInformation($input)) {
            $output->writeln('Config file: ' . $firstResolvedConfigFileInfo->getRelativeFilePathFromCwd());
        }
        return parent::doRun($input, $output);
    }
    public function renderThrowable(\Throwable $throwable, \_PhpScopera8f555a7493c\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        if (\is_a($throwable, \Symplify\EasyCodingStandard\Configuration\Exception\NoCheckersLoadedException::class)) {
            $this->noCheckersLoaderReporter->report();
            return;
        }
        parent::renderThrowable($throwable, $output);
    }
    protected function getDefaultInputDefinition() : \_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputDefinition
    {
        $inputDefinition = parent::getDefaultInputDefinition();
        $this->addExtraOptions($inputDefinition);
        return $inputDefinition;
    }
    private function shouldPrintMetaInformation(\_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputInterface $input) : bool
    {
        $hasNoArguments = $input->getFirstArgument() === null;
        $hasVersionOption = $input->hasParameterOption('--version');
        $isConsoleOutput = $input->getParameterOption('--' . \Symplify\EasyCodingStandard\ValueObject\Option::OUTPUT_FORMAT) === \Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter::NAME;
        return !$hasVersionOption && !$hasNoArguments && $isConsoleOutput;
    }
    private function addExtraOptions(\_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputDefinition $inputDefinition) : void
    {
        $inputDefinition->addOption(new \_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputOption(\Symplify\EasyCodingStandard\ValueObject\Option::XDEBUG, null, \_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Allow running xdebug'));
        $inputDefinition->addOption(new \_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputOption(\Symplify\EasyCodingStandard\ValueObject\Option::DEBUG, null, \_PhpScopera8f555a7493c\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Run in debug mode (alias for "-vvv")'));
    }
}
