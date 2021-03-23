<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use _PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputArgument;
use _PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputOption;
use _PhpScoper86aa49a51982\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication;
use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Guard\LoadedCheckersGuard;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
abstract class AbstractCheckCommand extends \Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand
{
    /**
     * @var Configuration
     */
    protected $configuration;
    /**
     * @var EasyCodingStandardStyle
     */
    protected $easyCodingStandardStyle;
    /**
     * @var EasyCodingStandardApplication
     */
    protected $easyCodingStandardApplication;
    /**
     * @var LoadedCheckersGuard
     */
    private $loadedCheckersGuard;
    /**
     * @required
     */
    public function autowireAbstractCheckCommand(\Symplify\EasyCodingStandard\Configuration\Configuration $configuration, \Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication $easyCodingStandardApplication, \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle $easyCodingStandardStyle, \Symplify\EasyCodingStandard\Guard\LoadedCheckersGuard $loadedCheckersGuard) : void
    {
        $this->configuration = $configuration;
        $this->easyCodingStandardApplication = $easyCodingStandardApplication;
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
        $this->loadedCheckersGuard = $loadedCheckersGuard;
    }
    protected function configure() : void
    {
        $this->addArgument(
            \Symplify\EasyCodingStandard\ValueObject\Option::PATHS,
            // optional is on purpose here, since path from ecs.php can se ubsed
            \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputArgument::OPTIONAL | \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputArgument::IS_ARRAY,
            'The path(s) to be checked.'
        );
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::FIX, null, null, 'Fix found violations.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::CLEAR_CACHE, null, null, 'Clear cache for already checked files.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::NO_PROGRESS_BAR, null, \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Hide progress bar. Useful e.g. for nicer CI output.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::NO_ERROR_TABLE, null, \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Hide error table. Useful e.g. for fast check of error count.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::OUTPUT_FORMAT, null, \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Select output format', \Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter::NAME);
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::MATCH_GIT_DIFF, null, \_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Execute only on file(s) matching the git diff.');
    }
    protected function initialize(\_PhpScoper86aa49a51982\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper86aa49a51982\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $this->loadedCheckersGuard->ensureSomeCheckersAreRegistered();
    }
}
