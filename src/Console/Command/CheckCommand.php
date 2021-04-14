<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use _PhpScoper7b319b4d8e1c\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper7b319b4d8e1c\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Reporter\ProcessedFileReporter;
final class CheckCommand extends \Symplify\EasyCodingStandard\Console\Command\AbstractCheckCommand
{
    /**
     * @var ProcessedFileReporter
     */
    private $processedFileReporter;
    public function __construct(\Symplify\EasyCodingStandard\Reporter\ProcessedFileReporter $processedFileReporter)
    {
        $this->processedFileReporter = $processedFileReporter;
        parent::__construct();
    }
    protected function configure() : void
    {
        $this->setDescription('Check coding standard in one or more directories.');
        parent::configure();
    }
    protected function execute(\_PhpScoper7b319b4d8e1c\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper7b319b4d8e1c\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->configuration->resolveFromInput($input);
        // CLI paths override parameter paths
        if ($this->configuration->getSources() === []) {
            $this->configuration->setSources($this->configuration->getPaths());
        }
        $processedFilesCount = $this->easyCodingStandardApplication->run();
        return $this->processedFileReporter->report($processedFilesCount);
    }
}
