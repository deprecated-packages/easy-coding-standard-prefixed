<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Arrays;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function array_reverse;
use function count;
use function in_array;
use const _PhpScoperd35c27cd4b09\T_CLOSE_PARENTHESIS;
use const _PhpScoperd35c27cd4b09\T_CLOSURE;
use const T_DOUBLE_COLON;
use const _PhpScoperd35c27cd4b09\T_EQUAL;
use const T_FOREACH;
use const T_LIST;
use const T_OBJECT_OPERATOR;
use const _PhpScoperd35c27cd4b09\T_OPEN_PARENTHESIS;
use const _PhpScoperd35c27cd4b09\T_OPEN_SHORT_ARRAY;
use const _PhpScoperd35c27cd4b09\T_OPEN_SQUARE_BRACKET;
use const T_OPEN_TAG;
use const T_STATIC;
use const T_STRING;
use const T_USE;
use const T_VARIABLE;
class DisallowImplicitArrayCreationSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_IMPLICIT_ARRAY_CREATION_USED = 'ImplicitArrayCreationUsed';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_OPEN_SQUARE_BRACKET];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $bracketOpenerPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $bracketOpenerPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $assigmentPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$bracketOpenerPointer]['bracket_closer'] + 1);
        if ($tokens[$assigmentPointer]['code'] !== \T_EQUAL) {
            return;
        }
        /** @var int $variablePointer */
        $variablePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $bracketOpenerPointer - 1);
        if ($tokens[$variablePointer]['code'] !== \T_VARIABLE) {
            return;
        }
        if (\in_array($tokens[$variablePointer]['content'], ['$GLOBALS', '$_SERVER', '$_REQUEST', '$_POST', '$_GET', '$_FILES', '$_ENV', '$_COOKIE', '$_SESSION', '$this'], \true)) {
            return;
        }
        $pointerBeforeVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
        if (\in_array($tokens[$pointerBeforeVariable]['code'], [\T_OBJECT_OPERATOR, \T_DOUBLE_COLON], \true)) {
            return;
        }
        $scopeOwnerPointer = null;
        foreach (\array_reverse($tokens[$variablePointer]['conditions'], \true) as $conditionPointer => $conditionTokenCode) {
            if (!\in_array($conditionTokenCode, \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                continue;
            }
            $scopeOwnerPointer = $conditionPointer;
            break;
        }
        if ($scopeOwnerPointer === null) {
            $scopeOwnerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_TAG, $variablePointer - 1);
        }
        $scopeOpenerPointer = $tokens[$scopeOwnerPointer]['code'] === \T_OPEN_TAG ? $scopeOwnerPointer : $tokens[$scopeOwnerPointer]['scope_opener'];
        $scopeCloserPointer = $tokens[$scopeOwnerPointer]['code'] === \T_OPEN_TAG ? \count($tokens) - 1 : $tokens[$scopeOwnerPointer]['scope_closer'];
        if (\in_array($tokens[$scopeOwnerPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
            if ($this->isParameter($phpcsFile, $scopeOwnerPointer, $variablePointer)) {
                return;
            }
            if ($tokens[$scopeOwnerPointer]['code'] === \T_CLOSURE && $this->isInheritedVariable($phpcsFile, $scopeOwnerPointer, $variablePointer)) {
                return;
            }
        }
        if ($this->hasExplicitCreation($phpcsFile, $scopeOpenerPointer, $scopeCloserPointer, $variablePointer)) {
            return;
        }
        $phpcsFile->addError('Implicit array creation is disallowed.', $variablePointer, self::CODE_IMPLICIT_ARRAY_CREATION_USED);
    }
    private function isParameter(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $variableName = $tokens[$variablePointer]['content'];
        $parameterPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextContent($phpcsFile, \T_VARIABLE, $variableName, $tokens[$functionPointer]['parenthesis_opener'] + 1, $tokens[$functionPointer]['parenthesis_closer']);
        return $parameterPointer !== null;
    }
    private function isInheritedVariable(\PHP_CodeSniffer\Files\File $phpcsFile, int $closurePointer, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $variableName = $tokens[$variablePointer]['content'];
        $usePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_USE, $tokens[$closurePointer]['parenthesis_closer'] + 1, $tokens[$closurePointer]['scope_opener']);
        if ($usePointer === null) {
            return \false;
        }
        $parenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $usePointer + 1);
        $inheritedVariablePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextContent($phpcsFile, \T_VARIABLE, $variableName, $parenthesisOpenerPointer + 1, $tokens[$parenthesisOpenerPointer]['parenthesis_closer']);
        return $inheritedVariablePointer !== null;
    }
    private function hasExplicitCreation(\PHP_CodeSniffer\Files\File $phpcsFile, int $scopeOpenerPointer, int $scopeCloserPointer, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $variableName = $tokens[$variablePointer]['content'];
        for ($i = $scopeOpenerPointer + 1; $i < $variablePointer; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            if (!\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $variablePointer, $i)) {
                continue;
            }
            $assigmentPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $i + 1);
            if ($tokens[$assigmentPointer]['code'] === \T_EQUAL) {
                return \true;
            }
            $staticPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if ($tokens[$staticPointer]['code'] === \T_STATIC) {
                return \true;
            }
            if ($this->isCreatedInForeach($phpcsFile, $i, $scopeCloserPointer)) {
                return \true;
            }
            if ($this->isCreatedInList($phpcsFile, $i, $scopeOpenerPointer)) {
                return \true;
            }
            if ($this->isCreatedByReferencedParameterInFunctionCall($phpcsFile, $i, $scopeOpenerPointer)) {
                return \true;
            }
        }
        return \false;
    }
    private function isCreatedInList(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, int $scopeOpenerPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, [\T_OPEN_PARENTHESIS, \T_OPEN_SHORT_ARRAY, \T_OPEN_SQUARE_BRACKET], $variablePointer - 1, $scopeOpenerPointer);
        if ($parenthesisOpenerPointer === null) {
            return \false;
        }
        if ($tokens[$parenthesisOpenerPointer]['code'] === \T_OPEN_PARENTHESIS) {
            if ($tokens[$parenthesisOpenerPointer]['parenthesis_closer'] < $variablePointer) {
                return \false;
            }
            $pointerBeforeParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisOpenerPointer - 1);
            return $tokens[$pointerBeforeParenthesisOpener]['code'] === \T_LIST;
        }
        return $tokens[$parenthesisOpenerPointer]['bracket_closer'] > $variablePointer;
    }
    private function isCreatedInForeach(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, int $scopeCloserPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisCloserPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_CLOSE_PARENTHESIS, $variablePointer + 1, $scopeCloserPointer);
        return $parenthesisCloserPointer !== null && \array_key_exists('parenthesis_owner', $tokens[$parenthesisCloserPointer]) && $tokens[$tokens[$parenthesisCloserPointer]['parenthesis_owner']]['code'] === \T_FOREACH && $tokens[$parenthesisCloserPointer]['parenthesis_opener'] < $variablePointer;
    }
    private function isCreatedByReferencedParameterInFunctionCall(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, int $scopeOpenerPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_PARENTHESIS, $variablePointer - 1, $scopeOpenerPointer);
        if ($parenthesisOpenerPointer === null || $tokens[$parenthesisOpenerPointer]['parenthesis_closer'] < $variablePointer) {
            return \false;
        }
        $pointerBeforeParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisOpenerPointer - 1);
        return $tokens[$pointerBeforeParenthesisOpener]['code'] === \T_STRING;
    }
}
