<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\ControlStructures;

use Exception;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\ConditionHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use Throwable;
use function array_key_exists;
use function count;
use function in_array;
use function range;
use function sort;
use function sprintf;
use const _PhpScoper839420027581\T_CLOSE_CURLY_BRACKET;
use const _PhpScoper839420027581\T_CLOSURE;
use const _PhpScoper839420027581\T_COLON;
use const T_DO;
use const T_ELSE;
use const T_ELSEIF;
use const T_FOR;
use const T_FOREACH;
use const T_FUNCTION;
use const T_IF;
use const _PhpScoper839420027581\T_OPEN_CURLY_BRACKET;
use const _PhpScoper839420027581\T_SEMICOLON;
use const T_WHILE;
use const T_WHITESPACE;
class EarlyExitSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_EARLY_EXIT_NOT_USED = 'EarlyExitNotUsed';
    public const CODE_USELESS_ELSEIF = 'UselessElseIf';
    public const CODE_USELESS_ELSE = 'UselessElse';
    /** @var bool */
    public $ignoreStandaloneIfInScope = \false;
    /** @var bool */
    public $ignoreOneLineTrailingIf = \false;
    /** @var bool */
    public $ignoreTrailingIfWithOneInstruction = \false;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_IF, \T_ELSEIF, \T_ELSE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $pointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $pointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$pointer]['code'] === \T_IF) {
            $this->processIf($phpcsFile, $pointer);
        } elseif ($tokens[$pointer]['code'] === \T_ELSEIF) {
            $this->processElseIf($phpcsFile, $pointer);
        } else {
            $this->processElse($phpcsFile, $pointer);
        }
    }
    private function processElse(\PHP_CodeSniffer\Files\File $phpcsFile, int $elsePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        if (!\array_key_exists('scope_opener', $tokens[$elsePointer])) {
            // Else without curly braces is not supported.
            return;
        }
        try {
            $allConditionsPointers = $this->getAllConditionsPointers($phpcsFile, $elsePointer);
        } catch (\Throwable $e) {
            // Else without curly braces is not supported.
            return;
        }
        $ifPointer = $allConditionsPointers[0];
        $ifEarlyExitPointer = null;
        $elseEarlyExitPointer = null;
        $previousConditionPointer = null;
        $previousConditionEarlyExitPointer = null;
        foreach ($allConditionsPointers as $conditionPointer) {
            $conditionEarlyExitPointer = $this->findEarlyExitInScope($phpcsFile, $tokens[$conditionPointer]['scope_opener'], $tokens[$conditionPointer]['scope_closer']);
            if ($conditionPointer === $elsePointer) {
                $elseEarlyExitPointer = $conditionEarlyExitPointer;
                continue;
            }
            if (\count($allConditionsPointers) > 2 && $conditionEarlyExitPointer === null) {
                return;
            }
            $previousConditionPointer = $conditionPointer;
            $previousConditionEarlyExitPointer = $conditionEarlyExitPointer;
            if ($conditionPointer === $ifPointer) {
                $ifEarlyExitPointer = $conditionEarlyExitPointer;
                continue;
            }
        }
        if ($ifEarlyExitPointer === null && $elseEarlyExitPointer === null) {
            return;
        }
        if ($elseEarlyExitPointer !== null && $previousConditionEarlyExitPointer === null) {
            $fix = $phpcsFile->addFixableError('Use early exit instead of "else".', $elsePointer, self::CODE_EARLY_EXIT_NOT_USED);
            if (!$fix) {
                return;
            }
            $ifCodePointers = $this->getScopeCodePointers($phpcsFile, $ifPointer);
            $elseCode = $this->getScopeCode($phpcsFile, $elsePointer);
            $negativeIfCondition = \SlevomatCodingStandard\Helpers\ConditionHelper::getNegativeCondition($phpcsFile, $tokens[$ifPointer]['parenthesis_opener'], $tokens[$ifPointer]['parenthesis_closer']);
            $afterIfCode = \SlevomatCodingStandard\Helpers\IndentationHelper::fixIndentation($phpcsFile, $ifCodePointers, \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $ifPointer));
            $phpcsFile->fixer->beginChangeset();
            for ($i = $ifPointer; $i <= $tokens[$elsePointer]['scope_closer']; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->addContent($ifPointer, \sprintf('if %s {%s}%s%s', $negativeIfCondition, $elseCode, $phpcsFile->eolChar, $afterIfCode));
            $phpcsFile->fixer->endChangeset();
            return;
        }
        $pointerAfterElseCondition = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$elsePointer]['scope_closer'] + 1);
        if ($pointerAfterElseCondition !== null && $tokens[$pointerAfterElseCondition]['code'] !== \T_CLOSE_CURLY_BRACKET) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Remove useless "else" to reduce code nesting.', $elsePointer, self::CODE_USELESS_ELSE);
        if (!$fix) {
            return;
        }
        $elseCodePointers = $this->getScopeCodePointers($phpcsFile, $elsePointer);
        $afterIfCode = \SlevomatCodingStandard\Helpers\IndentationHelper::fixIndentation($phpcsFile, $elseCodePointers, \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $ifPointer));
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->replaceToken($tokens[$previousConditionPointer]['scope_closer'] + 1, \sprintf('%s%s', $phpcsFile->eolChar, $afterIfCode));
        for ($i = $tokens[$previousConditionPointer]['scope_closer'] + 2; $i <= $tokens[$elsePointer]['scope_closer']; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function processElseIf(\PHP_CodeSniffer\Files\File $phpcsFile, int $elseIfPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        try {
            $allConditionsPointers = $this->getAllConditionsPointers($phpcsFile, $elseIfPointer);
        } catch (\Throwable $e) {
            // Elseif without curly braces is not supported.
            return;
        }
        foreach ($allConditionsPointers as $conditionPointer) {
            $conditionEarlyExitPointer = $this->findEarlyExitInScope($phpcsFile, $tokens[$conditionPointer]['scope_opener'], $tokens[$conditionPointer]['scope_closer']);
            if ($conditionPointer === $elseIfPointer) {
                break;
            }
            if ($conditionEarlyExitPointer === null) {
                return;
            }
        }
        $fix = $phpcsFile->addFixableError('Use "if" instead of "elseif".', $elseIfPointer, self::CODE_USELESS_ELSEIF);
        if (!$fix) {
            return;
        }
        /** @var int $pointerBeforeElseIfPointer */
        $pointerBeforeElseIfPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $elseIfPointer - 1);
        $phpcsFile->fixer->beginChangeset();
        for ($i = $pointerBeforeElseIfPointer + 1; $i < $elseIfPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->addNewline($pointerBeforeElseIfPointer);
        $phpcsFile->fixer->addNewline($pointerBeforeElseIfPointer);
        $phpcsFile->fixer->replaceToken($elseIfPointer, \sprintf('%sif', \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $allConditionsPointers[0])));
        $phpcsFile->fixer->endChangeset();
    }
    private function processIf(\PHP_CodeSniffer\Files\File $phpcsFile, int $ifPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        if (!\array_key_exists('scope_closer', $tokens[$ifPointer])) {
            // If without curly braces is not supported.
            return;
        }
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $tokens[$ifPointer]['scope_closer'] + 1);
        if ($nextPointer === null || $tokens[$nextPointer]['code'] !== \T_CLOSE_CURLY_BRACKET) {
            return;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $ifPointer - 1);
        if ($this->ignoreStandaloneIfInScope && \in_array($tokens[$previousPointer]['code'], [\T_OPEN_CURLY_BRACKET, \T_COLON], \true)) {
            return;
        }
        if ($this->ignoreOneLineTrailingIf && $tokens[$tokens[$ifPointer]['scope_opener']]['line'] + 2 === $tokens[$tokens[$ifPointer]['scope_closer']]['line']) {
            return;
        }
        if ($this->ignoreTrailingIfWithOneInstruction) {
            $pointerBeforeScopeCloser = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $tokens[$ifPointer]['scope_closer'] - 1);
            if ($tokens[$pointerBeforeScopeCloser]['code'] === \T_SEMICOLON) {
                $ignore = \true;
                foreach (\SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, \T_SEMICOLON, $tokens[$ifPointer]['scope_opener'] + 1, $pointerBeforeScopeCloser) as $anotherSemicolonPointer) {
                    if (\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $anotherSemicolonPointer, $pointerBeforeScopeCloser)) {
                        $ignore = \false;
                        break;
                    }
                }
                if ($ignore) {
                    return;
                }
            }
        }
        $scopePointer = $tokens[$nextPointer]['scope_condition'];
        if (!\in_array($tokens[$scopePointer]['code'], [\T_FUNCTION, \T_CLOSURE, \T_WHILE, \T_DO, \T_FOREACH, \T_FOR], \true)) {
            return;
        }
        if ($this->isEarlyExitInScope($phpcsFile, $tokens[$ifPointer]['scope_opener'], $tokens[$ifPointer]['scope_closer'])) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Use early exit to reduce code nesting.', $ifPointer, self::CODE_EARLY_EXIT_NOT_USED);
        if (!$fix) {
            return;
        }
        $ifCodePointers = $this->getScopeCodePointers($phpcsFile, $ifPointer);
        $ifIndentation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $ifPointer);
        $earlyExitCode = $this->getEarlyExitCode($tokens[$scopePointer]['code']);
        $earlyExitCodeIndentation = \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($ifIndentation);
        $negativeIfCondition = \SlevomatCodingStandard\Helpers\ConditionHelper::getNegativeCondition($phpcsFile, $tokens[$ifPointer]['parenthesis_opener'], $tokens[$ifPointer]['parenthesis_closer']);
        $afterIfCode = \SlevomatCodingStandard\Helpers\IndentationHelper::fixIndentation($phpcsFile, $ifCodePointers, $ifIndentation);
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->replaceToken($ifPointer, \sprintf('if %s {%s%s%s;%s%s}%s%s', $negativeIfCondition, $phpcsFile->eolChar, $earlyExitCodeIndentation, $earlyExitCode, $phpcsFile->eolChar, $ifIndentation, $phpcsFile->eolChar, $afterIfCode));
        for ($i = $ifPointer + 1; $i <= $tokens[$ifPointer]['scope_closer']; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function getScopeCode(\PHP_CodeSniffer\Files\File $phpcsFile, int $scopePointer) : string
    {
        $tokens = $phpcsFile->getTokens();
        return \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $tokens[$scopePointer]['scope_opener'] + 1, $tokens[$scopePointer]['scope_closer'] - 1);
    }
    /**
     * @param File $phpcsFile
     * @param int $scopePointer
     * @return int[]
     */
    private function getScopeCodePointers(\PHP_CodeSniffer\Files\File $phpcsFile, int $scopePointer) : array
    {
        $tokens = $phpcsFile->getTokens();
        return \range($tokens[$scopePointer]['scope_opener'] + 1, $tokens[$scopePointer]['scope_closer'] - 1);
    }
    /**
     * @param string|int $code
     * @return string
     */
    private function getEarlyExitCode($code) : string
    {
        if (\in_array($code, [\T_WHILE, \T_DO, \T_FOREACH, \T_FOR], \true)) {
            return 'continue';
        }
        return 'return';
    }
    private function findEarlyExitInScope(\PHP_CodeSniffer\Files\File $phpcsFile, int $startPointer, int $endPointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        $ifPointers = \SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, \T_IF, $startPointer + 1, $endPointer);
        if ($ifPointers !== []) {
            foreach ($ifPointers as $ifPointer) {
                if ($tokens[$ifPointer]['level'] - 1 !== $tokens[$startPointer]['level']) {
                    continue;
                }
                $conditionPointers = $this->getAllConditionsPointers($phpcsFile, $ifPointer);
                foreach ($conditionPointers as $conditionPointer) {
                    if ($this->findEarlyExitInScope($phpcsFile, $tokens[$conditionPointer]['scope_opener'], $tokens[$conditionPointer]['scope_closer']) === null) {
                        return null;
                    }
                }
            }
        }
        $lastSemicolonInScopePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $endPointer - 1, $startPointer);
        return $tokens[$lastSemicolonInScopePointer]['code'] === \T_SEMICOLON ? \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousLocal($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::$earlyExitTokenCodes, $lastSemicolonInScopePointer - 1, $startPointer) : null;
    }
    private function isEarlyExitInScope(\PHP_CodeSniffer\Files\File $phpcsFile, int $startPointer, int $endPointer) : bool
    {
        return $this->findEarlyExitInScope($phpcsFile, $startPointer, $endPointer) !== null;
    }
    /**
     * @param File $phpcsFile
     * @param int $conditionPointer
     * @return int[]
     */
    private function getAllConditionsPointers(\PHP_CodeSniffer\Files\File $phpcsFile, int $conditionPointer) : array
    {
        $tokens = $phpcsFile->getTokens();
        $conditionsPointers = [$conditionPointer];
        if (isset($tokens[$conditionPointer]['scope_opener']) && $tokens[$tokens[$conditionPointer]['scope_opener']]['code'] === \T_COLON) {
            // Alternative control structure syntax.
            throw new \Exception(\sprintf('"%s" without curly braces is not supported.', $tokens[$conditionPointer]['content']));
        }
        if ($tokens[$conditionPointer]['code'] !== \T_IF) {
            $currentConditionPointer = $conditionPointer;
            do {
                $previousConditionCloseParenthesisPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $currentConditionPointer - 1);
                $currentConditionPointer = $tokens[$previousConditionCloseParenthesisPointer]['scope_condition'];
                $conditionsPointers[] = $currentConditionPointer;
            } while ($tokens[$currentConditionPointer]['code'] !== \T_IF);
        }
        if ($tokens[$conditionPointer]['code'] !== \T_ELSE) {
            if (!\array_key_exists('scope_closer', $tokens[$conditionPointer])) {
                throw new \Exception(\sprintf('"%s" without curly braces is not supported.', $tokens[$conditionPointer]['content']));
            }
            $currentConditionPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$conditionPointer]['scope_closer'] + 1);
            if ($currentConditionPointer !== null) {
                while (\in_array($tokens[$currentConditionPointer]['code'], [\T_ELSEIF, \T_ELSE], \true)) {
                    $conditionsPointers[] = $currentConditionPointer;
                    if (!\array_key_exists('scope_closer', $tokens[$currentConditionPointer])) {
                        throw new \Exception(\sprintf('"%s" without curly braces is not supported.', $tokens[$currentConditionPointer]['content']));
                    }
                    $currentConditionPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$currentConditionPointer]['scope_closer'] + 1);
                }
            }
        }
        \sort($conditionsPointers);
        return $conditionsPointers;
    }
}
