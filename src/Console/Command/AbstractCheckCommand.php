<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use _PhpScoperd4c5032f0671\Symfony\Component\Console\Command\Command;
use _PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputArgument;
use _PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputOption;
use _PhpScoperd4c5032f0671\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication;
use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter;
use Symplify\EasyCodingStandard\Console\Output\OutputFormatterCollector;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory;
use Symplify\EasyCodingStandard\Guard\LoadedCheckersGuard;
use Symplify\EasyCodingStandard\ValueObject\Option;
abstract class AbstractCheckCommand extends \_PhpScoperd4c5032f0671\Symfony\Component\Console\Command\Command
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
     * @var OutputFormatterCollector
     */
    private $outputFormatterCollector;
    /**
     * @var ErrorAndDiffCollector
     */
    private $errorAndDiffCollector;
    /**
     * @var ErrorAndDiffResultFactory
     */
    private $errorAndDiffResultFactory;
    /**
     * @var LoadedCheckersGuard
     */
    private $loadedCheckersGuard;
    /**
     * @required
     */
    public function autowireAbstractCheckCommand(\Symplify\EasyCodingStandard\Configuration\Configuration $configuration, \Symplify\EasyCodingStandard\Application\EasyCodingStandardApplication $easyCodingStandardApplication, \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle $easyCodingStandardStyle, \Symplify\EasyCodingStandard\Console\Output\OutputFormatterCollector $outputFormatterCollector, \Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector $errorAndDiffCollector, \Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory $errorAndDiffResultFactory, \Symplify\EasyCodingStandard\Guard\LoadedCheckersGuard $loadedCheckersGuard) : void
    {
        $this->configuration = $configuration;
        $this->easyCodingStandardApplication = $easyCodingStandardApplication;
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
        $this->outputFormatterCollector = $outputFormatterCollector;
        $this->errorAndDiffCollector = $errorAndDiffCollector;
        $this->errorAndDiffResultFactory = $errorAndDiffResultFactory;
        $this->loadedCheckersGuard = $loadedCheckersGuard;
    }
    protected function configure() : void
    {
        $this->addArgument(
            \Symplify\EasyCodingStandard\ValueObject\Option::PATHS,
            // optional is on purpose here, since path from ecs.php can se ubsed
            \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputArgument::OPTIONAL | \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputArgument::IS_ARRAY,
            'The path(s) to be checked.'
        );
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::FIX, null, null, 'Fix found violations.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::CLEAR_CACHE, null, null, 'Clear cache for already checked files.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::NO_PROGRESS_BAR, null, \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Hide progress bar. Useful e.g. for nicer CI output.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::NO_ERROR_TABLE, null, \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Hide error table. Useful e.g. for fast check of error count.');
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::OUTPUT_FORMAT, null, \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED, 'Select output format', \Symplify\EasyCodingStandard\Console\Output\ConsoleOutputFormatter::NAME);
        $this->addOption(\Symplify\EasyCodingStandard\ValueObject\Option::MATCH_GIT_DIFF, null, \_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputOption::VALUE_NONE, 'Execute only on file(s) matching the git diff.');
    }
    protected function initialize(\_PhpScoperd4c5032f0671\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperd4c5032f0671\Symfony\Component\Console\Output\OutputInterface $output) : void
    {
        $this->loadedCheckersGuard->ensureSomeCheckersAreRegistered();
    }
    protected function reportProcessedFiles(int $processedFileCount) : int
    {
        $outputFormat = $this->configuration->getOutputFormat();
        $outputFormatter = $this->outputFormatterCollector->getByName($outputFormat);
        $errorAndDiffResult = $this->errorAndDiffResultFactory->create($this->errorAndDiffCollector);
        return $outputFormatter->report($errorAndDiffResult, $processedFileCount);
    }
}
