<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console;

use _PhpScoper0b185984cfb7\Composer\XdebugHandler\XdebugHandler;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Command\Command;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputDefinition;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputOption;
use _PhpScoper0b185984cfb7\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter;
use Symplify\EasyCodingStandard\Configuration\Exception\NoCheckersLoadedException;
use Symplify\EasyCodingStandard\Console\Command\CheckCommand;
use Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\PackageBuilder\Composer\PackageVersionProvider;
use Symplify\PackageBuilder\Console\Command\CommandNaming;
use Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication;
use Throwable;
final class EasyCodingStandardConsoleApplication extends \Symplify\SymplifyKernel\Console\AbstractSymplifyConsoleApplication
{
    /**
     * @var NoCheckersLoaderReporter
     */
    private $noCheckersLoaderReporter;
    /**
     * @param Command[] $commands
     */
    public function __construct(\Symplify\EasyCodingStandard\Bootstrap\NoCheckersLoaderReporter $noCheckersLoaderReporter, array $commands)
    {
        $packageVersionProvider = new \Symplify\PackageBuilder\Composer\PackageVersionProvider();
        $version = $packageVersionProvider->provide('symplify/easy-coding-standard');
        parent::__construct($commands, 'EasyCodingStandard', $version);
        $this->noCheckersLoaderReporter = $noCheckersLoaderReporter;
        $this->setDefaultCommand(\Symplify\PackageBuilder\Console\Command\CommandNaming::classToName(\Symplify\EasyCodingStandard\Console\Command\CheckCommand::class));
    }
    public function doRun(\_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper0b185984cfb7\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        // @fixes https://github.com/rectorphp/rector/issues/2205
        $isXdebugAllowed = $input->hasParameterOption('--xdebug');
        if (!$isXdebugAllowed && !\defined('PHPUNIT_COMPOSER_INSTALL')) {
            $xdebugHandler = new \_PhpScoper0b185984cfb7\Composer\XdebugHandler\XdebugHandler('ecs', '--ansi');
            $xdebugHandler->check();
            unset($xdebugHandler);
        }
        // skip in this case, since generate content must be clear from meta-info
        if ($this->shouldPrintMetaInformation($input)) {
            $output->writeln($this->getLongVersion());
        }
        return parent::doRun($input, $output);
    }
    public function renderThrowable(\Throwable $throwable, \_PhpScoper0b185984cfb7\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        if (\is_a($throwable, \Symplify\EasyCodingStandard\Configuration\Exception\NoCheckersLoadedException::class)) {
            $this->noCheckersLoaderReporter->report();
            return;
        }
        parent::renderThrowable($throwable, $output);
    }
    protected function getDefaultInputDefinition() : \_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputDefinition
    {
        $inputDefinition = parent::getDefaultInputDefinition();
        $this->addExtraOptions($inputDefinition);
        return $inputDefinition;
    }
    private function shouldPrintMetaInformation(\_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputInterface $input) : bool
    {
        $hasNoArguments = $input->getFirstArgument() === null;
        $hasVersionOption = $input->hasParameterOption('--version');
        if ($hasVersionOption) {
            return \false;
        }
        if ($hasNoArguments) {
            return \false;
        }
        $outputFormat = $input->getParameterOption('--' . \Symplify\EasyCodingStandard\ValueObject\Option::OUTPUT_FORMAT);
        return $outputFormat === \Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter::NAME;
    }
    private function addExtraOptions(\_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputDefinition $inputDefinition) : void
    {
        $inputDefinition->addOption(new \_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputOption(\Symplify\EasyCodingStandard\ValueObject\Option::XDEBUG, null, \_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Allow running xdebug'));
        $inputDefinition->addOption(new \_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputOption(\Symplify\EasyCodingStandard\ValueObject\Option::DEBUG, null, \_PhpScoper0b185984cfb7\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Run in debug mode (alias for "-vvv")'));
    }
}
