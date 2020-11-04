<?php

declare (strict_types=1);
namespace Symplify\PackageBuilder\Console\Style;

use _PhpScoperb383f16e851e\Symfony\Component\Console\Application;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Input\ArgvInput;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Output\ConsoleOutput;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
final class SymfonyStyleFactory
{
    /**
     * @var PrivatesCaller
     */
    private $privatesCaller;
    public function __construct()
    {
        $this->privatesCaller = new \Symplify\PackageBuilder\Reflection\PrivatesCaller();
    }
    public function create() : \_PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle
    {
        // to prevent missing argv indexes
        if (!isset($_SERVER['argv'])) {
            $_SERVER['argv'] = [];
        }
        $argvInput = new \_PhpScoperb383f16e851e\Symfony\Component\Console\Input\ArgvInput();
        $consoleOutput = new \_PhpScoperb383f16e851e\Symfony\Component\Console\Output\ConsoleOutput();
        // to configure all -v, -vv, -vvv options without memory-lock to Application run() arguments
        $this->privatesCaller->callPrivateMethod(new \_PhpScoperb383f16e851e\Symfony\Component\Console\Application(), 'configureIO', $argvInput, $consoleOutput);
        // --debug is called
        if ($argvInput->hasParameterOption('--debug')) {
            $consoleOutput->setVerbosity(\_PhpScoperb383f16e851e\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG);
        }
        return new \_PhpScoperb383f16e851e\Symfony\Component\Console\Style\SymfonyStyle($argvInput, $consoleOutput);
    }
}