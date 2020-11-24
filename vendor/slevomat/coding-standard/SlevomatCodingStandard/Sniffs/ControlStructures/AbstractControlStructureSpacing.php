<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\ControlStructures;

use Exception;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\CommentHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Sniffs\Namespaces\UndefinedKeywordTokenException;
use Throwable;
use function array_key_exists;
use function array_map;
use function array_values;
use function constant;
use function count;
use function defined;
use function in_array;
use function sprintf;
use function strlen;
use function substr;
use function substr_count;
use const _PhpScoper7108c819f5c5\T_ANON_CLASS;
use const T_CASE;
use const T_CATCH;
use const _PhpScoper7108c819f5c5\T_CLOSE_CURLY_BRACKET;
use const _PhpScoper7108c819f5c5\T_CLOSURE;
use const _PhpScoper7108c819f5c5\T_COLON;
use const T_DEFAULT;
use const T_DO;
use const T_ELSE;
use const T_ELSEIF;
use const T_FINALLY;
use const _PhpScoper7108c819f5c5\T_FN;
use const T_FOR;
use const T_FOREACH;
use const T_IF;
use const _PhpScoper7108c819f5c5\T_OPEN_CURLY_BRACKET;
use const _PhpScoper7108c819f5c5\T_OPEN_SHORT_ARRAY;
use const T_OPEN_TAG;
use const _PhpScoper7108c819f5c5\T_SEMICOLON;
use const T_SWITCH;
use const T_TRY;
use const T_WHILE;
use const T_WHITESPACE;
/**
 * @internal
 */
abstract class AbstractControlStructureSpacing implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_LINES_COUNT_BEFORE_CONTROL_STRUCTURE = 'IncorrectLinesCountBeforeControlStructure';
    public const CODE_INCORRECT_LINES_COUNT_BEFORE_FIRST_CONTROL_STRUCTURE = 'IncorrectLinesCountBeforeFirstControlStructure';
    public const CODE_INCORRECT_LINES_COUNT_AFTER_CONTROL_STRUCTURE = 'IncorrectLinesCountAfterControlStructure';
    public const CODE_INCORRECT_LINES_COUNT_AFTER_LAST_CONTROL_STRUCTURE = 'IncorrectLinesCountAfterLastControlStructure';
    /** @var (string|int)[]|null */
    private $normalizedTokensToCheck;
    /**
     * @return array<int|string>
     */
    protected abstract function getSupportedTokens() : array;
    /**
     * @return string[]
     */
    protected abstract function getTokensToCheck() : array;
    protected abstract function getLinesCountBefore() : int;
    protected abstract function getLinesCountBeforeFirst(\PHP_CodeSniffer\Files\File $phpcsFile, int $controlStructurePointer) : int;
    protected abstract function getLinesCountAfter() : int;
    protected abstract function getLinesCountAfterLast(\PHP_CodeSniffer\Files\File $phpcsFile, int $controlStructurePointer, int $controlStructureEndPointer) : int;
    /**
     * @return (int|string)[]
     */
    public function register() : array
    {
        return $this->getNormalizedTokensToCheck();
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $controlStructurePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $controlStructurePointer) : void
    {
        $this->checkLinesBefore($phpcsFile, $controlStructurePointer);
        try {
            $this->checkLinesAfter($phpcsFile, $controlStructurePointer);
        } catch (\Throwable $e) {
            // Unsupported syntax without curly braces.
            return;
        }
    }
    protected function checkLinesBefore(\PHP_CodeSniffer\Files\File $phpcsFile, int $controlStructurePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $nonWhitespacePointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $controlStructurePointer - 1);
        $controlStructureStartPointer = $controlStructurePointer;
        $pointerBefore = $nonWhitespacePointerBefore;
        $pointerToCheckFirst = $pointerBefore;
        if (\in_array($tokens[$nonWhitespacePointerBefore]['code'], \PHP_CodeSniffer\Util\Tokens::$commentTokens, \true)) {
            $effectivePointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $pointerBefore - 1);
            if ($tokens[$effectivePointerBefore]['line'] === $tokens[$nonWhitespacePointerBefore]['line']) {
                $pointerToCheckFirst = $effectivePointerBefore;
            } elseif ($tokens[$nonWhitespacePointerBefore]['line'] + 1 === $tokens[$controlStructurePointer]['line']) {
                if ($tokens[$effectivePointerBefore]['line'] !== $tokens[$nonWhitespacePointerBefore]['line']) {
                    $controlStructureStartPointer = \array_key_exists('comment_opener', $tokens[$nonWhitespacePointerBefore]) ? $tokens[$nonWhitespacePointerBefore]['comment_opener'] : \SlevomatCodingStandard\Helpers\CommentHelper::getMultilineCommentStartPointer($phpcsFile, $nonWhitespacePointerBefore);
                    $pointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $controlStructureStartPointer - 1);
                }
                $pointerToCheckFirst = $pointerBefore;
            }
        }
        $isFirstControlStructure = \in_array($tokens[$pointerToCheckFirst]['code'], [\T_OPEN_CURLY_BRACKET, \T_COLON], \true);
        if ($isFirstControlStructure && \in_array($tokens[$controlStructurePointer]['code'], [\T_CASE, \T_DEFAULT], \true) && \array_key_exists('scope_condition', $tokens[$pointerBefore]) && \in_array($tokens[$tokens[$pointerBefore]['scope_condition']]['code'], [\T_CASE, \T_DEFAULT], \true)) {
            $isFirstControlStructure = \false;
        }
        $whitespaceBefore = '';
        if ($tokens[$pointerBefore]['code'] === \T_OPEN_TAG) {
            $whitespaceBefore .= \substr($tokens[$pointerBefore]['content'], \strlen('<?php'));
        }
        $hasCommentWithLineEndBefore = \in_array($tokens[$pointerBefore]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$inlineCommentTokenCodes, \true) && \substr($tokens[$pointerBefore]['content'], -\strlen($phpcsFile->eolChar)) === $phpcsFile->eolChar;
        if ($hasCommentWithLineEndBefore) {
            $whitespaceBefore .= $phpcsFile->eolChar;
        }
        if ($pointerBefore + 1 !== $controlStructurePointer) {
            $whitespaceBefore .= \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $pointerBefore + 1, $controlStructureStartPointer - 1);
        }
        $requiredLinesCountBefore = $isFirstControlStructure ? $this->getLinesCountBeforeFirst($phpcsFile, $controlStructurePointer) : $this->getLinesCountBefore();
        $actualLinesCountBefore = \substr_count($whitespaceBefore, $phpcsFile->eolChar) - 1;
        if ($requiredLinesCountBefore === $actualLinesCountBefore) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Expected %d lines before "%s", found %d.', $requiredLinesCountBefore, $tokens[$controlStructurePointer]['content'], $actualLinesCountBefore), $controlStructurePointer, $isFirstControlStructure ? self::CODE_INCORRECT_LINES_COUNT_BEFORE_FIRST_CONTROL_STRUCTURE : self::CODE_INCORRECT_LINES_COUNT_BEFORE_CONTROL_STRUCTURE);
        if (!$fix) {
            return;
        }
        $endOfLineBeforePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $controlStructureStartPointer - 1);
        $phpcsFile->fixer->beginChangeset();
        if ($tokens[$pointerBefore]['code'] === \T_OPEN_TAG) {
            $phpcsFile->fixer->replaceToken($pointerBefore, '<?php');
        }
        for ($i = $pointerBefore + 1; $i <= $endOfLineBeforePointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $linesToAdd = $hasCommentWithLineEndBefore ? $requiredLinesCountBefore - 1 : $requiredLinesCountBefore;
        for ($i = 0; $i <= $linesToAdd; $i++) {
            $phpcsFile->fixer->addNewline($pointerBefore);
        }
        $phpcsFile->fixer->endChangeset();
    }
    protected function checkLinesAfter(\PHP_CodeSniffer\Files\File $phpcsFile, int $controlStructurePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $controlStructureEndPointer = $this->findControlStructureEnd($phpcsFile, $controlStructurePointer);
        $pointerAfterControlStructureEnd = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $controlStructureEndPointer + 1);
        if ($pointerAfterControlStructureEnd !== null && $tokens[$pointerAfterControlStructureEnd]['code'] === \T_SEMICOLON) {
            $controlStructureEndPointer = $pointerAfterControlStructureEnd;
        }
        $notWhitespacePointerAfter = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $controlStructureEndPointer + 1);
        if ($notWhitespacePointerAfter === null) {
            return;
        }
        $hasCommentAfter = \in_array($tokens[$notWhitespacePointerAfter]['code'], \PHP_CodeSniffer\Util\Tokens::$commentTokens, \true) && $tokens[$notWhitespacePointerAfter]['line'] === $tokens[$controlStructureEndPointer]['line'];
        $pointerAfter = $hasCommentAfter ? \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $notWhitespacePointerAfter + 1) : $notWhitespacePointerAfter;
        $isLastControlStructure = \in_array($tokens[$controlStructurePointer]['code'], [\T_CASE, \T_DEFAULT], \true) ? $tokens[$pointerAfter]['code'] === \T_CLOSE_CURLY_BRACKET : \in_array($tokens[$pointerAfter]['code'], [\T_CLOSE_CURLY_BRACKET, \T_CASE, \T_DEFAULT], \true);
        $requiredLinesCountAfter = $isLastControlStructure ? $this->getLinesCountAfterLast($phpcsFile, $controlStructurePointer, $controlStructureEndPointer) : $this->getLinesCountAfter();
        $actualLinesCountAfter = $tokens[$pointerAfter]['line'] - $tokens[$controlStructureEndPointer]['line'] - 1;
        if ($requiredLinesCountAfter === $actualLinesCountAfter) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Expected %d lines after "%s", found %d.', $requiredLinesCountAfter, $tokens[$controlStructurePointer]['content'], $actualLinesCountAfter), $controlStructurePointer, $isLastControlStructure ? self::CODE_INCORRECT_LINES_COUNT_AFTER_LAST_CONTROL_STRUCTURE : self::CODE_INCORRECT_LINES_COUNT_AFTER_CONTROL_STRUCTURE);
        if (!$fix) {
            return;
        }
        $replaceStartPointer = $hasCommentAfter ? $notWhitespacePointerAfter : $controlStructureEndPointer;
        $endOfLineBeforeAfterPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $pointerAfter - 1);
        $phpcsFile->fixer->beginChangeset();
        for ($i = $replaceStartPointer + 1; $i <= $endOfLineBeforeAfterPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        if ($hasCommentAfter) {
            for ($i = 0; $i < $requiredLinesCountAfter; $i++) {
                $phpcsFile->fixer->addNewline($notWhitespacePointerAfter);
            }
        } else {
            for ($i = 0; $i <= $requiredLinesCountAfter; $i++) {
                $phpcsFile->fixer->addNewline($controlStructureEndPointer);
            }
        }
        $phpcsFile->fixer->endChangeset();
    }
    /**
     * @return (int|string)[]
     */
    private function getNormalizedTokensToCheck() : array
    {
        if ($this->normalizedTokensToCheck === null) {
            $supportedTokens = $this->getSupportedTokens();
            $this->normalizedTokensToCheck = \array_values(\array_map(static function (string $tokenCode) use($supportedTokens) {
                if (!\defined($tokenCode)) {
                    throw new \SlevomatCodingStandard\Sniffs\Namespaces\UndefinedKeywordTokenException($tokenCode);
                }
                $const = \constant($tokenCode);
                if (!\in_array($const, $supportedTokens, \true)) {
                    throw new \SlevomatCodingStandard\Sniffs\ControlStructures\UnsupportedTokenException($tokenCode);
                }
                return $const;
            }, \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->getTokensToCheck())));
            if (\count($this->normalizedTokensToCheck) === 0) {
                $this->normalizedTokensToCheck = $supportedTokens;
            }
        }
        return $this->normalizedTokensToCheck;
    }
    private function findControlStructureEnd(\PHP_CodeSniffer\Files\File $phpcsFile, int $controlStructurePointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$controlStructurePointer]['code'] === \T_IF) {
            if (!\array_key_exists('scope_closer', $tokens[$controlStructurePointer])) {
                throw new \Exception('"if" without curly braces is not supported.');
            }
            $controlStructureEndPointer = $tokens[$controlStructurePointer]['scope_closer'];
            do {
                $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $controlStructureEndPointer + 1);
                if ($nextPointer === null) {
                    return $controlStructureEndPointer;
                }
                if ($tokens[$nextPointer]['code'] === \T_ELSE) {
                    if (!\array_key_exists('scope_closer', $tokens[$nextPointer])) {
                        throw new \Exception('"else" without curly braces is not supported.');
                    }
                    return $tokens[$nextPointer]['scope_closer'];
                }
                if ($tokens[$nextPointer]['code'] !== \T_ELSEIF) {
                    return $controlStructureEndPointer;
                }
                $controlStructureEndPointer = $tokens[$nextPointer]['scope_closer'];
            } while (\true);
        }
        if ($tokens[$controlStructurePointer]['code'] === \T_DO) {
            $whilePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_WHILE, $tokens[$controlStructurePointer]['scope_closer'] + 1);
            return (int) \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $tokens[$whilePointer]['parenthesis_closer'] + 1);
        }
        if ($tokens[$controlStructurePointer]['code'] === \T_TRY) {
            $controlStructureEndPointer = $tokens[$controlStructurePointer]['scope_closer'];
            do {
                $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $controlStructureEndPointer + 1);
                if ($nextPointer === null) {
                    return $controlStructureEndPointer;
                }
                if (!\in_array($tokens[$nextPointer]['code'], [\T_CATCH, \T_FINALLY], \true)) {
                    return $controlStructureEndPointer;
                }
                $controlStructureEndPointer = $tokens[$nextPointer]['scope_closer'];
            } while (\true);
        }
        if (\in_array($tokens[$controlStructurePointer]['code'], [\T_WHILE, \T_FOR, \T_FOREACH, \T_SWITCH], \true)) {
            return $tokens[$controlStructurePointer]['scope_closer'];
        }
        if (\in_array($tokens[$controlStructurePointer]['code'], [\T_CASE, \T_DEFAULT], \true)) {
            $switchPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_SWITCH, $controlStructurePointer - 1);
            $pointerAfterControlStructureEnd = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_CASE, \T_DEFAULT], $controlStructurePointer + 1, $tokens[$switchPointer]['scope_closer']);
            if ($pointerAfterControlStructureEnd === null) {
                return \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $tokens[$switchPointer]['scope_closer'] - 1);
            }
            return \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $pointerAfterControlStructureEnd - 1);
        }
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_SEMICOLON, \T_ANON_CLASS, \T_CLOSURE, \T_FN, \T_OPEN_SHORT_ARRAY], $controlStructurePointer + 1);
        if ($tokens[$nextPointer]['code'] === \T_SEMICOLON) {
            return $nextPointer;
        }
        $nextPointer = $tokens[$nextPointer]['code'] === \T_OPEN_SHORT_ARRAY ? (int) \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $tokens[$nextPointer]['bracket_closer'] + 1) : (int) \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $tokens[$nextPointer]['scope_closer'] + 1);
        $level = $tokens[$controlStructurePointer]['level'];
        while ($level !== $tokens[$nextPointer]['level']) {
            $nextPointer = (int) \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $nextPointer + 1);
        }
        return $nextPointer;
    }
}
