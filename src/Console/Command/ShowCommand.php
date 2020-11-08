<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Command;

use PHP_CodeSniffer\Sniffs\Sniff;
use PhpCsFixer\Fixer\FixerInterface;
use _PhpScoperd79d87c3336e\Symfony\Component\Console\Command\Command;
use _PhpScoperd79d87c3336e\Symfony\Component\Console\Input\InputInterface;
use _PhpScoperd79d87c3336e\Symfony\Component\Console\Output\OutputInterface;
use Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle;
use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\PackageBuilder\Parameter\ParameterProvider;
use Symplify\SmartFileSystem\SmartFileInfo;
final class ShowCommand extends \_PhpScoperd79d87c3336e\Symfony\Component\Console\Command\Command
{
    /**
     * @var int
     */
    private $checkersTotal = 0;
    /**
     * @var SniffFileProcessor
     */
    private $sniffFileProcessor;
    /**
     * @var FixerFileProcessor
     */
    private $fixerFileProcessor;
    /**
     * @var EasyCodingStandardStyle
     */
    private $easyCodingStandardStyle;
    /**
     * @var ParameterProvider
     */
    private $parameterProvider;
    public function __construct(\Symplify\EasyCodingStandard\SniffRunner\Application\SniffFileProcessor $sniffFileProcessor, \Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor $fixerFileProcessor, \Symplify\EasyCodingStandard\Console\Style\EasyCodingStandardStyle $easyCodingStandardStyle, \Symplify\PackageBuilder\Parameter\ParameterProvider $parameterProvider)
    {
        parent::__construct();
        $this->sniffFileProcessor = $sniffFileProcessor;
        $this->fixerFileProcessor = $fixerFileProcessor;
        $this->easyCodingStandardStyle = $easyCodingStandardStyle;
        $this->parameterProvider = $parameterProvider;
    }
    protected function configure() : void
    {
        $this->setDescription('Show loaded checkers');
    }
    protected function execute(\_PhpScoperd79d87c3336e\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoperd79d87c3336e\Symfony\Component\Console\Output\OutputInterface $output) : int
    {
        $this->displayCheckerList($this->sniffFileProcessor->getCheckers(), 'PHP_CodeSniffer');
        $this->displayCheckerList($this->fixerFileProcessor->getCheckers(), 'PHP-CS-Fixer');
        $successMessage = \sprintf('Loaded %d checker%s in total', $this->checkersTotal, $this->checkersTotal === 1 ? '' : 's');
        $this->easyCodingStandardStyle->success($successMessage);
        $this->reportLoadedSets();
        return \Symplify\PackageBuilder\Console\ShellCode::SUCCESS;
    }
    /**
     * @param FixerInterface[]|Sniff[]|string[] $checkers
     */
    private function displayCheckerList(array $checkers, string $type) : void
    {
        if (\count($checkers) === 0) {
            return;
        }
        $checkerNames = \array_map(function ($fixer) : string {
            return \is_string($fixer) ? $fixer : \get_class($fixer);
        }, $checkers);
        $this->checkersTotal += \count($checkers);
        $sectionMessage = \sprintf('%d checker%s from %s:', \count($checkers), \count($checkers) === 1 ? '' : 's', $type);
        $this->easyCodingStandardStyle->section($sectionMessage);
        \sort($checkerNames);
        $this->easyCodingStandardStyle->listing($checkerNames);
    }
    private function reportLoadedSets() : void
    {
        $sets = (array) $this->parameterProvider->provideParameter(\Symplify\EasyCodingStandard\ValueObject\Option::SETS);
        if ($sets === []) {
            return;
        }
        $this->easyCodingStandardStyle->title('Loaded Sets');
        \sort($sets);
        foreach ($sets as $set) {
            $setFileInfo = new \Symplify\SmartFileSystem\SmartFileInfo($set);
            $filename = $setFileInfo->getRelativeFilePathFromCwd();
            $this->easyCodingStandardStyle->writeln(' * ' . $filename);
        }
        $message = \sprintf('%d loaded sets', \count($sets));
        $this->easyCodingStandardStyle->success($message);
    }
}
