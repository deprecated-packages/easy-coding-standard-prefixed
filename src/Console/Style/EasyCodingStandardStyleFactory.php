<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Style;

use _PhpScoper7f5523334c1b\Symfony\Component\Console\Application;
use _PhpScoper7f5523334c1b\Symfony\Component\Console\Input\ArgvInput;
use _PhpScoper7f5523334c1b\Symfony\Component\Console\Output\ConsoleOutput;
use _PhpScoper7f5523334c1b\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper7f5523334c1b\Symfony\Component\Console\Terminal;
use Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
final class EasyCodingStandardStyleFactory
{
    /**
     * @var PrivatesCaller
     */
    private $privatesCaller;
    /**
     * @var Terminal
     */
    private $terminal;
    public function __construct(\_PhpScoper7f5523334c1b\Symfony\Component\Console\Terminal $terminal)
    {
        $this->privatesCaller = new \Symplify\PackageBuilder\Reflection\PrivatesCaller();
        $this->terminal = $terminal;
    }
    public function create() : \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle
    {
        $argvInput = new \_PhpScoper7f5523334c1b\Symfony\Component\Console\Input\ArgvInput();
        $consoleOutput = new \_PhpScoper7f5523334c1b\Symfony\Component\Console\Output\ConsoleOutput();
        // to configure all -v, -vv, -vvv options without memory-lock to Application run() arguments
        $this->privatesCaller->callPrivateMethod(new \_PhpScoper7f5523334c1b\Symfony\Component\Console\Application(), 'configureIO', $argvInput, $consoleOutput);
        // --debug is called
        if ($argvInput->hasParameterOption('--debug')) {
            $consoleOutput->setVerbosity(\_PhpScoper7f5523334c1b\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG);
        }
        // disable output for tests
        if (\Symplify\EasyTesting\PHPUnit\StaticPHPUnitEnvironment::isPHPUnitRun()) {
            $consoleOutput->setVerbosity(\_PhpScoper7f5523334c1b\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET);
        }
        return new \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle($argvInput, $consoleOutput, $this->terminal);
    }
}
