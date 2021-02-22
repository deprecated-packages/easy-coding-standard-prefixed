<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Reporter;

use Symplify\EasyCodingStandard\Configuration\Configuration;
use Symplify\EasyCodingStandard\Console\Output\OutputFormatterCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector;
use Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory;
final class ProcessedFileReporter
{
    /**
     * @var Configuration
     */
    private $configuration;
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
    public function __construct(\Symplify\EasyCodingStandard\Configuration\Configuration $configuration, \Symplify\EasyCodingStandard\Console\Output\OutputFormatterCollector $outputFormatterCollector, \Symplify\EasyCodingStandard\Error\ErrorAndDiffCollector $errorAndDiffCollector, \Symplify\EasyCodingStandard\Error\ErrorAndDiffResultFactory $errorAndDiffResultFactory)
    {
        $this->configuration = $configuration;
        $this->outputFormatterCollector = $outputFormatterCollector;
        $this->errorAndDiffCollector = $errorAndDiffCollector;
        $this->errorAndDiffResultFactory = $errorAndDiffResultFactory;
    }
    public function report(int $processedFileCount) : int
    {
        $outputFormat = $this->configuration->getOutputFormat();
        $outputFormatter = $this->outputFormatterCollector->getByName($outputFormat);
        $errorAndDiffResult = $this->errorAndDiffResultFactory->create($this->errorAndDiffCollector);
        return $outputFormatter->report($errorAndDiffResult, $processedFileCount);
    }
}
