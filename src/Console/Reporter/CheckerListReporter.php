<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Reporter;

use PHP_CodeSniffer\Sniffs\Sniff;
use PhpCsFixer\Fixer\FixerInterface;
use _PhpScoper15c5423f4731\Symfony\Component\Console\Style\SymfonyStyle;
final class CheckerListReporter
{
    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;
    public function __construct(\_PhpScoper15c5423f4731\Symfony\Component\Console\Style\SymfonyStyle $symfonyStyle)
    {
        $this->symfonyStyle = $symfonyStyle;
    }
    /**
     * @param FixerInterface[]|Sniff[]|string[] $checkers
     */
    public function report(array $checkers, string $type) : void
    {
        if (\count($checkers) === 0) {
            return;
        }
        $checkerNames = \array_map(function ($fixer) : string {
            return \is_string($fixer) ? $fixer : \get_class($fixer);
        }, $checkers);
        $sectionMessage = \sprintf('%d checker%s from %s:', \count($checkers), \count($checkers) === 1 ? '' : 's', $type);
        $this->symfonyStyle->section($sectionMessage);
        \sort($checkerNames);
        $this->symfonyStyle->listing($checkerNames);
    }
}
