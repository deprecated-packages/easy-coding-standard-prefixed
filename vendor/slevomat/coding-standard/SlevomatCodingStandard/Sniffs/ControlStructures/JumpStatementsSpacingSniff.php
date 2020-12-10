<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\ControlStructures;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function abs;
use function array_key_exists;
use function in_array;
use const T_BREAK;
use const T_CASE;
use const _PhpScoper3ba93baeac18\T_CLOSE_CURLY_BRACKET;
use const _PhpScoper3ba93baeac18\T_COLON;
use const T_CONTINUE;
use const T_DEFAULT;
use const T_GOTO;
use const T_RETURN;
use const T_SWITCH;
use const T_THROW;
use const T_YIELD;
use const T_YIELD_FROM;
class JumpStatementsSpacingSniff extends \SlevomatCodingStandard\Sniffs\ControlStructures\AbstractControlStructureSpacing
{
    /** @var int */
    public $linesCountBeforeControlStructure = 1;
    /** @var int */
    public $linesCountBeforeFirstControlStructure = 0;
    /** @var int|null */
    public $linesCountBeforeWhenFirstInCaseOrDefault = null;
    /** @var int */
    public $linesCountAfterControlStructure = 1;
    /** @var int */
    public $linesCountAfterLastControlStructure = 0;
    /** @var int|null */
    public $linesCountAfterWhenLastInCaseOrDefault = null;
    /** @var int|null */
    public $linesCountAfterWhenLastInLastCaseOrDefault = null;
    /** @var bool */
    public $allowSingleLineYieldStacking = \true;
    /** @var string[] */
    public $tokensToCheck = [];
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $jumpStatementPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $jumpStatementPointer) : void
    {
        if ($this->isOneOfYieldSpecialCases($phpcsFile, $jumpStatementPointer)) {
            return;
        }
        parent::process($phpcsFile, $jumpStatementPointer);
    }
    /**
     * @return int[]
     */
    protected function getSupportedTokens() : array
    {
        return [\T_GOTO, \T_BREAK, \T_CONTINUE, \T_RETURN, \T_THROW, \T_YIELD, \T_YIELD_FROM];
    }
    /**
     * @return string[]
     */
    protected function getTokensToCheck() : array
    {
        return $this->tokensToCheck;
    }
    protected function getLinesCountBefore() : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeControlStructure);
    }
    protected function getLinesCountBeforeFirst(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer) : int
    {
        if ($this->linesCountBeforeWhenFirstInCaseOrDefault !== null && $this->isFirstInCaseOrDefault($phpcsFile, $jumpStatementPointer)) {
            return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeWhenFirstInCaseOrDefault);
        }
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeFirstControlStructure);
    }
    protected function getLinesCountAfter() : int
    {
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterControlStructure);
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.Functions.UnusedParameter.UnusedParameter
     * @param File $phpcsFile
     * @param int $jumpStatementPointer
     * @param int $jumpStatementEndPointer
     * @return int
     */
    protected function getLinesCountAfterLast(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer, int $jumpStatementEndPointer) : int
    {
        if ($this->linesCountAfterWhenLastInLastCaseOrDefault !== null && $this->isLastInLastCaseOrDefault($phpcsFile, $jumpStatementEndPointer)) {
            return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterWhenLastInLastCaseOrDefault);
        }
        if ($this->linesCountAfterWhenLastInCaseOrDefault !== null && $this->isLastInCaseOrDefault($phpcsFile, $jumpStatementEndPointer)) {
            return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterWhenLastInCaseOrDefault);
        }
        return \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountAfterLastControlStructure);
    }
    protected function checkLinesBefore(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer) : void
    {
        if ($this->allowSingleLineYieldStacking && $this->isStackedSingleLineYield($phpcsFile, $jumpStatementPointer, \true)) {
            return;
        }
        parent::checkLinesBefore($phpcsFile, $jumpStatementPointer);
    }
    protected function checkLinesAfter(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer) : void
    {
        if ($this->allowSingleLineYieldStacking && $this->isStackedSingleLineYield($phpcsFile, $jumpStatementPointer, \false)) {
            return;
        }
        parent::checkLinesAfter($phpcsFile, $jumpStatementPointer);
    }
    private function isOneOfYieldSpecialCases(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $jumpStatementToken = $tokens[$jumpStatementPointer];
        if ($jumpStatementToken['code'] !== \T_YIELD && $jumpStatementToken['code'] !== \T_YIELD_FROM) {
            return \false;
        }
        // check if yield is used inside parentheses (function call, while, ...)
        if (\array_key_exists('nested_parenthesis', $jumpStatementToken)) {
            return \true;
        }
        $pointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $jumpStatementPointer - 1);
        // check if yield is used in assignment
        if (\in_array($tokens[$pointerBefore]['code'], \PHP_CodeSniffer\Util\Tokens::$assignmentTokens, \true)) {
            return \true;
        }
        // check if yield is used in a return statement
        return $tokens[$pointerBefore]['code'] === \T_RETURN;
    }
    private function isStackedSingleLineYield(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer, bool $previous) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $yields = [\T_YIELD, \T_YIELD_FROM];
        if (!\in_array($tokens[$jumpStatementPointer]['code'], $yields, \true)) {
            return \false;
        }
        $adjoiningYieldPointer = $previous ? \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, $yields, $jumpStatementPointer - 1) : \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, $yields, $jumpStatementPointer + 1);
        return $adjoiningYieldPointer !== null && \abs($tokens[$adjoiningYieldPointer]['line'] - $tokens[$jumpStatementPointer]['line']) === 1;
    }
    private function isFirstInCaseOrDefault(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $jumpStatementPointer - 1);
        if ($tokens[$previousPointer]['code'] !== \T_COLON) {
            return \false;
        }
        $firstPointerOnLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstNonWhitespaceOnLine($phpcsFile, $previousPointer);
        return \in_array($tokens[$firstPointerOnLine]['code'], [\T_CASE, \T_DEFAULT], \true);
    }
    private function isLastInCaseOrDefault(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementEndPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $jumpStatementEndPointer + 1);
        if (\in_array($tokens[$nextPointer]['code'], [\T_CASE, \T_DEFAULT], \true)) {
            return \true;
        }
        return $tokens[$nextPointer]['code'] === \T_CLOSE_CURLY_BRACKET && \array_key_exists('scope_condition', $tokens[$nextPointer]) && $tokens[$tokens[$nextPointer]['scope_condition']]['code'] === \T_SWITCH;
    }
    private function isLastInLastCaseOrDefault(\PHP_CodeSniffer\Files\File $phpcsFile, int $jumpStatementEndPointer) : bool
    {
        if (!$this->isLastInCaseOrDefault($phpcsFile, $jumpStatementEndPointer)) {
            return \false;
        }
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $jumpStatementEndPointer + 1);
        return !\in_array($phpcsFile->getTokens()[$nextPointer]['code'], [\T_CASE, \T_DEFAULT], \true);
    }
}
