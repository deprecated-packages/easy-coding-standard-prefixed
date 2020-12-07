<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use _PhpScoperfa521053d812\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperfa521053d812\Symfony\Component\Console\Output\OutputInterface;
final class CheckCommand extends \Symplify\EasyCodingStandard\Console\Command\AbstractCheckCommand
{
    protected function configure() : void
    {
        $this->setDescription('Check coding standard in one or more directories.');
        parent::configure();
    }
    protected function execute(\_PhpScoperfa521053d812\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperfa521053d812\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->configuration->resolveFromInput($input);
        // CLI paths override parameter paths
        if ($this->configuration->getSources() === []) {
            $this->configuration->setSources($this->configuration->getPaths());
        }
        $processedFilesCount = $this->easyCodingStandardApplication->run();
        return $this->reportProcessedFiles($processedFilesCount);
    }
}
