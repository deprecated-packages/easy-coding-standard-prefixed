<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Functions;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use const _PhpScoperea337ed74749\T_BITWISE_AND;
use const _PhpScoperea337ed74749\T_CLOSE_PARENTHESIS;
use const _PhpScoperea337ed74749\T_CLOSURE;
use const _PhpScoperea337ed74749\T_FN;
use const T_RETURN;
use const _PhpScoperea337ed74749\T_SEMICOLON;
use const T_USE;
use const T_WHITESPACE;
class RequireArrowFunctionSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_REQUIRED_ARROW_FUNCTION = 'RequiredArrowFunction';
    /** @var bool */
    public $allowNested = \true;
    /** @var bool|null */
    public $enable = null;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_CLOSURE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $closurePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $closurePointer) : void
    {
        $this->enable = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::isEnabledByPhpVersion($this->enable, 70400);
        if (!$this->enable) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $returnPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$closurePointer]['scope_opener'] + 1);
        if ($tokens[$returnPointer]['code'] !== \T_RETURN) {
            return;
        }
        $usePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$closurePointer]['parenthesis_closer'] + 1);
        if ($tokens[$usePointer]['code'] === \T_USE) {
            $useOpenParenthesisPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $usePointer + 1);
            if (\SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_BITWISE_AND, $useOpenParenthesisPointer + 1, $tokens[$useOpenParenthesisPointer]['parenthesis_closer']) !== null) {
                return;
            }
        }
        if (!$this->allowNested) {
            $closureOrArrowFunctionPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_CLOSURE, \T_FN], $tokens[$closurePointer]['scope_opener'] + 1, $tokens[$closurePointer]['scope_closer']);
            if ($closureOrArrowFunctionPointer !== null) {
                return;
            }
        }
        $fix = $phpcsFile->addFixableError('Use arrow function.', $closurePointer, self::CODE_REQUIRED_ARROW_FUNCTION);
        if (!$fix) {
            return;
        }
        $pointerAfterReturn = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $returnPointer + 1);
        $semicolonAfterReturn = $this->findSemicolon($phpcsFile, $returnPointer);
        $usePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_USE, $tokens[$closurePointer]['parenthesis_closer'] + 1, $tokens[$closurePointer]['scope_opener']);
        $nonWhitespacePointerBeforeScopeOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $tokens[$closurePointer]['scope_opener'] - 1);
        $nonWhitespacePointerAfterUseParanthesisCloser = null;
        if ($usePointer !== null) {
            $useParenthesiCloserPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_CLOSE_PARENTHESIS, $usePointer + 1);
            $nonWhitespacePointerAfterUseParanthesisCloser = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $useParenthesiCloserPointer + 1);
        }
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->replaceToken($closurePointer, 'fn');
        if ($nonWhitespacePointerAfterUseParanthesisCloser !== null) {
            for ($i = $tokens[$closurePointer]['parenthesis_closer'] + 1; $i < $nonWhitespacePointerAfterUseParanthesisCloser; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        }
        for ($i = $nonWhitespacePointerBeforeScopeOpener + 1; $i < $pointerAfterReturn; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->addContent($nonWhitespacePointerBeforeScopeOpener, ' => ');
        for ($i = $semicolonAfterReturn; $i <= $tokens[$closurePointer]['scope_closer']; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function findSemicolon(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        $semicolonPointer = null;
        for ($i = $pointer + 1; $i < \count($tokens) - 1; $i++) {
            if ($tokens[$i]['code'] !== \T_SEMICOLON) {
                continue;
            }
            if (!\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $pointer, $i)) {
                continue;
            }
            $semicolonPointer = $i;
            break;
        }
        /** @var int $semicolonPointer */
        $semicolonPointer = $semicolonPointer;
        return $semicolonPointer;
    }
}
