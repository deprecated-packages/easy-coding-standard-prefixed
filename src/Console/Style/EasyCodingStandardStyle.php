<?php

declare (strict_types=1);
namespace Symplify\EasyCodingStandard\Console\Style;

use _PhpScoper967d20dce97a\Symfony\Component\Console\Input\InputInterface;
use _PhpScoper967d20dce97a\Symfony\Component\Console\Output\OutputInterface;
use _PhpScoper967d20dce97a\Symfony\Component\Console\Style\SymfonyStyle;
use _PhpScoper967d20dce97a\Symfony\Component\Console\Terminal;
use Symplify\EasyCodingStandard\ValueObject\Error\CodingStandardError;
use Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use Symplify\PackageBuilder\Reflection\PrivatesCaller;
final class EasyCodingStandardStyle extends \_PhpScoper967d20dce97a\Symfony\Component\Console\Style\SymfonyStyle
{
    /**
     * To fit in Linux/Windows terminal windows to prevent overflow.
     * @var int
     */
    private const BULGARIAN_CONSTANT = 8;
    /**
     * @var Terminal
     */
    private $terminal;
    public function __construct(\_PhpScoper967d20dce97a\Symfony\Component\Console\Input\InputInterface $input, \_PhpScoper967d20dce97a\Symfony\Component\Console\Output\OutputInterface $output, \_PhpScoper967d20dce97a\Symfony\Component\Console\Terminal $terminal)
    {
        parent::__construct($input, $output);
        $this->terminal = $terminal;
    }
    /**
     * @param CodingStandardError[] $codingStandardErrors
     */
    public function printErrors(array $codingStandardErrors) : void
    {
        /** @var CodingStandardError $codingStandardError */
        foreach ($codingStandardErrors as $codingStandardError) {
            $this->separator();
            $this->writeln(' ' . $codingStandardError->getFileWithLine());
            $this->separator();
            $message = $this->createMessageFromFileError($codingStandardError);
            $this->writeln(' ' . $message);
            $this->separator();
            $this->newLine();
        }
    }
    public function enableDebugProgressBar() : void
    {
        $privatesAccessor = new \Symplify\PackageBuilder\Reflection\PrivatesAccessor();
        $progressBar = $privatesAccessor->getPrivateProperty($this, 'progressBar');
        $privatesCaller = new \Symplify\PackageBuilder\Reflection\PrivatesCaller();
        $privatesCaller->callPrivateMethod($progressBar, 'setRealFormat', 'debug');
    }
    private function separator() : void
    {
        $separator = \str_repeat('-', $this->getTerminalWidth());
        $this->writeln(' ' . $separator);
    }
    private function createMessageFromFileError(\Symplify\EasyCodingStandard\ValueObject\Error\CodingStandardError $codingStandardError) : string
    {
        $message = \sprintf('%s%s Reported by: "%s"', $codingStandardError->getMessage(), \PHP_EOL . \PHP_EOL, $codingStandardError->getCheckerClass());
        $message = $this->clearCrLfFromMessage($message);
        return $this->wrapMessageSoItFitsTheColumnWidth($message);
    }
    private function getTerminalWidth() : int
    {
        return $this->terminal->getWidth() - self::BULGARIAN_CONSTANT;
    }
    /**
     * This prevents message override in Windows system.
     */
    private function clearCrLfFromMessage(string $message) : string
    {
        return \str_replace("\r", '', $message);
    }
    private function wrapMessageSoItFitsTheColumnWidth(string $message) : string
    {
        return \wordwrap($message, $this->getTerminalWidth(), \PHP_EOL);
    }
}
