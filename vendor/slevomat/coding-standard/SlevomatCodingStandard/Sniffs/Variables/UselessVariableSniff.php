<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Variables;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function array_keys;
use function array_reverse;
use function count;
use function in_array;
use function preg_match;
use function preg_quote;
use function sprintf;
use const T_AND_EQUAL;
use const _PhpScoper57210e33e43a\T_BITWISE_AND;
use const _PhpScoper57210e33e43a\T_CLOSE_CURLY_BRACKET;
use const T_CONCAT_EQUAL;
use const T_DIV_EQUAL;
use const T_DO;
use const _PhpScoper57210e33e43a\T_DOC_COMMENT_CLOSE_TAG;
use const T_DOUBLE_COLON;
use const T_ELSEIF;
use const _PhpScoper57210e33e43a\T_EQUAL;
use const T_IF;
use const T_MINUS_EQUAL;
use const T_MOD_EQUAL;
use const T_MUL_EQUAL;
use const _PhpScoper57210e33e43a\T_OPEN_CURLY_BRACKET;
use const _PhpScoper57210e33e43a\T_OPEN_PARENTHESIS;
use const T_OR_EQUAL;
use const T_PLUS_EQUAL;
use const T_POW_EQUAL;
use const T_RETURN;
use const _PhpScoper57210e33e43a\T_SEMICOLON;
use const T_SL_EQUAL;
use const T_SR_EQUAL;
use const T_STATIC;
use const T_VARIABLE;
use const T_WHILE;
use const T_WHITESPACE;
use const T_XOR_EQUAL;
class UselessVariableSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_USELESS_VARIABLE = 'UselessVariable';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_RETURN];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $returnPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $returnPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        /** @var int $variablePointer */
        $variablePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $returnPointer + 1);
        if ($tokens[$variablePointer]['code'] !== \T_VARIABLE) {
            return;
        }
        $returnSemicolonPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $variablePointer + 1);
        if ($tokens[$returnSemicolonPointer]['code'] !== \T_SEMICOLON) {
            return;
        }
        $variableName = $tokens[$variablePointer]['content'];
        $functionPointer = $this->findFunctionPointer($phpcsFile, $variablePointer);
        if ($functionPointer !== null) {
            if ($this->isReturnedByReference($phpcsFile, $functionPointer)) {
                return;
            }
            if ($this->isStaticVariable($phpcsFile, $functionPointer, $variablePointer, $variableName)) {
                return;
            }
            if ($this->isFunctionParameter($phpcsFile, $functionPointer, $variableName)) {
                return;
            }
        }
        $previousVariablePointer = $this->findPreviousVariablePointer($phpcsFile, $returnPointer, $variableName);
        if ($previousVariablePointer === null) {
            return;
        }
        if (!$this->isAssigmentToVariable($phpcsFile, $previousVariablePointer)) {
            return;
        }
        if ($this->hasVariableVarAnnotation($phpcsFile, $previousVariablePointer)) {
            return;
        }
        if ($this->hasAnotherAssigmentBefore($phpcsFile, $previousVariablePointer, $variableName)) {
            return;
        }
        if (!$this->areBothPointersNearby($phpcsFile, $previousVariablePointer, $returnPointer)) {
            return;
        }
        $errorParameters = [\sprintf('Useless variable %s.', $variableName), $previousVariablePointer, self::CODE_USELESS_VARIABLE];
        $searchBefore = $previousVariablePointer;
        do {
            $previousOpenParenthesisPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_PARENTHESIS, $searchBefore - 1);
            if ($previousOpenParenthesisPointer === null || $tokens[$previousOpenParenthesisPointer]['parenthesis_closer'] < $previousVariablePointer) {
                break;
            }
            if (\array_key_exists('parenthesis_owner', $tokens[$previousOpenParenthesisPointer]) && \in_array($tokens[$tokens[$previousOpenParenthesisPointer]['parenthesis_owner']]['code'], [\T_IF, \T_ELSEIF, \T_WHILE], \true)) {
                return;
            }
            $searchBefore = $previousOpenParenthesisPointer;
        } while (\true);
        $pointerBeforePreviousVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousVariablePointer - 1);
        if (!\in_array($tokens[$pointerBeforePreviousVariable]['code'], [\T_SEMICOLON, \T_OPEN_CURLY_BRACKET, \T_CLOSE_CURLY_BRACKET], \true) && \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $returnSemicolonPointer + 1) !== null) {
            $phpcsFile->addError(...$errorParameters);
            return;
        }
        $fix = $phpcsFile->addFixableError(...$errorParameters);
        if (!$fix) {
            return;
        }
        /** @var int $assigmentPointer */
        $assigmentPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $previousVariablePointer + 1);
        $assigmentFixerMapping = [\T_PLUS_EQUAL => '+', \T_MINUS_EQUAL => '-', \T_MUL_EQUAL => '*', \T_DIV_EQUAL => '/', \T_POW_EQUAL => '**', \T_MOD_EQUAL => '%', \T_AND_EQUAL => '&', \T_OR_EQUAL => '|', \T_XOR_EQUAL => '^', \T_SL_EQUAL => '<<', \T_SR_EQUAL => '>>', \T_CONCAT_EQUAL => '.'];
        $previousVariableSemicolonPointer = $this->findSemicolon($phpcsFile, $previousVariablePointer);
        $phpcsFile->fixer->beginChangeset();
        if ($tokens[$assigmentPointer]['code'] === \T_EQUAL) {
            for ($i = $previousVariablePointer; $i < $assigmentPointer; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->replaceToken($assigmentPointer, 'return');
        } else {
            $phpcsFile->fixer->addContentBefore($previousVariablePointer, 'return ');
            $phpcsFile->fixer->replaceToken($assigmentPointer, $assigmentFixerMapping[$tokens[$assigmentPointer]['code']]);
        }
        for ($i = $previousVariableSemicolonPointer + 1; $i <= $returnSemicolonPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function findPreviousVariablePointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer, string $variableName) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        for ($i = $pointer - 1; $i >= 0; $i--) {
            if (\in_array($tokens[$i]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true) && \SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $tokens[$i]['scope_opener'] + 1, $pointer)) {
                return null;
            }
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if ($tokens[$previousPointer]['code'] === \T_DOUBLE_COLON) {
                continue;
            }
            if (!\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $i, $pointer)) {
                continue;
            }
            return $i;
        }
        return null;
    }
    private function isAssigmentToVariable(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : bool
    {
        $assigmentPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $pointer + 1);
        return \in_array($phpcsFile->getTokens()[$assigmentPointer]['code'], [\T_EQUAL, \T_PLUS_EQUAL, \T_MINUS_EQUAL, \T_MUL_EQUAL, \T_DIV_EQUAL, \T_POW_EQUAL, \T_MOD_EQUAL, \T_AND_EQUAL, \T_OR_EQUAL, \T_XOR_EQUAL, \T_SL_EQUAL, \T_SR_EQUAL, \T_CONCAT_EQUAL], \true);
    }
    private function findFunctionPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        foreach (\array_reverse($tokens[$pointer]['conditions'], \true) as $conditionPointer => $conditionTokenCode) {
            if (\in_array($conditionTokenCode, \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                return $conditionPointer;
            }
        }
        return null;
    }
    private function isStaticVariable(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, int $variablePointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        for ($i = $tokens[$functionPointer]['scope_opener'] + 1; $i < $variablePointer; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            $pointerBeforeParameter = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if ($tokens[$pointerBeforeParameter]['code'] === \T_STATIC) {
                return \true;
            }
        }
        return \false;
    }
    private function isFunctionParameter(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        for ($i = $tokens[$functionPointer]['parenthesis_opener'] + 1; $i < $tokens[$functionPointer]['parenthesis_closer']; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            return \true;
        }
        return \false;
    }
    private function isReturnedByReference(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $referencePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $functionPointer + 1);
        return $tokens[$referencePointer]['code'] === \T_BITWISE_AND;
    }
    private function hasVariableVarAnnotation(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $pointerBeforeVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $variablePointer - 1);
        if ($tokens[$pointerBeforeVariable]['code'] !== \T_DOC_COMMENT_CLOSE_TAG) {
            return \false;
        }
        $docCommentContent = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $tokens[$pointerBeforeVariable]['comment_opener'], $pointerBeforeVariable);
        return \preg_match('~@(?:(?:phpstan|psalm)-)?var\\s+.+\\s+' . \preg_quote($tokens[$variablePointer]['content'], '~') . '(?:\\s|$)~', $docCommentContent) !== 0;
    }
    private function hasAnotherAssigmentBefore(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, string $variableName) : bool
    {
        $previousVariablePointer = $this->findPreviousVariablePointer($phpcsFile, $variablePointer, $variableName);
        if ($previousVariablePointer === null) {
            return \false;
        }
        if (!$this->isAssigmentToVariable($phpcsFile, $previousVariablePointer)) {
            return \false;
        }
        return $this->areBothVariablesNearby($phpcsFile, $previousVariablePointer, $variablePointer);
    }
    private function areBothPointersNearby(\PHP_CodeSniffer\Files\File $phpcsFile, int $firstPointer, int $secondPointer) : bool
    {
        $firstVariableSemicolonPointer = $this->findSemicolon($phpcsFile, $firstPointer);
        $pointerAfterFirstVariableSemicolon = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $firstVariableSemicolonPointer + 1);
        return $pointerAfterFirstVariableSemicolon === $secondPointer;
    }
    private function areBothVariablesNearby(\PHP_CodeSniffer\Files\File $phpcsFile, int $firstVariablePointer, int $secondVariablePointer) : bool
    {
        if ($this->areBothPointersNearby($phpcsFile, $firstVariablePointer, $secondVariablePointer)) {
            return \true;
        }
        $tokens = $phpcsFile->getTokens();
        $lastConditionPointer = \array_reverse(\array_keys($tokens[$firstVariablePointer]['conditions']))[0];
        $lastConditionScopeCloserPointer = $tokens[$lastConditionPointer]['scope_closer'];
        if ($tokens[$lastConditionPointer]['code'] === \T_DO) {
            $lastConditionScopeCloserPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $lastConditionScopeCloserPointer + 1);
        }
        return \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $lastConditionScopeCloserPointer + 1) === $secondVariablePointer;
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
