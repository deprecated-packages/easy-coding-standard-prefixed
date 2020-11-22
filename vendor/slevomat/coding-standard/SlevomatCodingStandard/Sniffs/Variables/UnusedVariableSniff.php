<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Variables;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\ParameterHelper;
use SlevomatCodingStandard\Helpers\PropertyHelper;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\VariableHelper;
use function array_key_exists;
use function array_keys;
use function array_merge;
use function array_reverse;
use function in_array;
use function sprintf;
use const T_AND_EQUAL;
use const T_AS;
use const _PhpScoperf3db63c305b2\T_BITWISE_AND;
use const _PhpScoperf3db63c305b2\T_CLOSE_CURLY_BRACKET;
use const _PhpScoperf3db63c305b2\T_CLOSE_SHORT_ARRAY;
use const _PhpScoperf3db63c305b2\T_CLOSURE;
use const _PhpScoperf3db63c305b2\T_COMMA;
use const T_CONCAT_EQUAL;
use const T_DEC;
use const T_DIV_EQUAL;
use const T_DO;
use const T_DOUBLE_ARROW;
use const T_DOUBLE_COLON;
use const _PhpScoperf3db63c305b2\T_DOUBLE_QUOTED_STRING;
use const T_ELSEIF;
use const _PhpScoperf3db63c305b2\T_EQUAL;
use const T_FOR;
use const T_FOREACH;
use const T_GLOBAL;
use const _PhpScoperf3db63c305b2\T_HEREDOC;
use const T_IF;
use const T_INC;
use const T_LIST;
use const T_MINUS_EQUAL;
use const T_MOD_EQUAL;
use const T_MUL_EQUAL;
use const T_OBJECT_OPERATOR;
use const _PhpScoperf3db63c305b2\T_OPEN_PARENTHESIS;
use const _PhpScoperf3db63c305b2\T_OPEN_SHORT_ARRAY;
use const _PhpScoperf3db63c305b2\T_OPEN_SQUARE_BRACKET;
use const T_OPEN_TAG;
use const T_OR_EQUAL;
use const T_PLUS_EQUAL;
use const T_POW_EQUAL;
use const T_SL_EQUAL;
use const T_SR_EQUAL;
use const T_STATIC;
use const T_STRING;
use const _PhpScoperf3db63c305b2\T_STRING_CONCAT;
use const T_USE;
use const T_VARIABLE;
use const T_WHILE;
use const T_XOR_EQUAL;
class UnusedVariableSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_UNUSED_VARIABLE = 'UnusedVariable';
    /** @var bool */
    public $ignoreUnusedValuesWhenOnlyKeysAreUsedInForeach = \false;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_VARIABLE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $variablePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $variablePointer) : void
    {
        if (!$this->isAssignment($phpcsFile, $variablePointer)) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $variableName = $tokens[$variablePointer]['content'];
        if (\in_array($variableName, ['$this', '$GLOBALS', '$_SERVER', '$_GET', '$_POST', '$_FILES', '$_COOKIE', '$_SESSION', '$_REQUEST', '$_ENV'], \true)) {
            return;
        }
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
        if (\in_array($tokens[$previousPointer]['code'], [\T_OBJECT_OPERATOR, \T_DOUBLE_COLON], \true)) {
            // Property
            return;
        }
        if (\in_array($tokens[$previousPointer]['code'], [\T_EQUAL, \T_PLUS_EQUAL, \T_MINUS_EQUAL, \T_MUL_EQUAL, \T_DIV_EQUAL, \T_POW_EQUAL, \T_MOD_EQUAL, \T_AND_EQUAL, \T_OR_EQUAL, \T_XOR_EQUAL, \T_SL_EQUAL, \T_SR_EQUAL, \T_CONCAT_EQUAL], \true)) {
            return;
        }
        if ($this->isUsedAsParameter($phpcsFile, $variablePointer)) {
            return;
        }
        if ($this->isUsedInForLoopCondition($phpcsFile, $variablePointer, $variableName)) {
            return;
        }
        if ($this->isDefinedInDoConditionAndUsedInLoop($phpcsFile, $variablePointer, $variableName)) {
            return;
        }
        if ($this->isUsedInLoopCycle($phpcsFile, $variablePointer, $variableName)) {
            return;
        }
        if ($this->isUsedAsKeyOrValueInArray($phpcsFile, $variablePointer)) {
            return;
        }
        if ($this->isValueInForeachAndErrorIsIgnored($phpcsFile, $variablePointer)) {
            return;
        }
        $scopeOwnerPointer = \SlevomatCodingStandard\Helpers\ScopeHelper::getRootPointer($phpcsFile, $variablePointer - 1);
        foreach (\array_reverse($tokens[$variablePointer]['conditions'], \true) as $conditionPointer => $conditionTokenCode) {
            if (\in_array($conditionTokenCode, \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                $scopeOwnerPointer = $conditionPointer;
                break;
            }
        }
        if (\in_array($tokens[$scopeOwnerPointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
            if ($this->isStaticOrGlobalVariable($phpcsFile, $scopeOwnerPointer, $variableName)) {
                return;
            }
            if ($this->isParameterPassedByReference($phpcsFile, $scopeOwnerPointer, $variableName)) {
                return;
            }
            if ($tokens[$scopeOwnerPointer]['code'] === \T_CLOSURE && $this->isInheritedVariablePassedByReference($phpcsFile, $scopeOwnerPointer, $variableName)) {
                return;
            }
        }
        if ($this->isReference($phpcsFile, $scopeOwnerPointer, $variablePointer)) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\VariableHelper::isUsedInScopeAfterPointer($phpcsFile, $scopeOwnerPointer, $variablePointer, $variablePointer + 1)) {
            return;
        }
        if ($this->isPartOfStatementAndWithIncrementOrDecrementOperator($phpcsFile, $variablePointer)) {
            return;
        }
        $phpcsFile->addError(\sprintf('Unused variable %s.', $variableName), $variablePointer, self::CODE_UNUSED_VARIABLE);
    }
    private function isAssignment(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $variablePointer + 1);
        if (\in_array($tokens[$nextPointer]['code'], [\T_EQUAL, \T_PLUS_EQUAL, \T_MINUS_EQUAL, \T_MUL_EQUAL, \T_DIV_EQUAL, \T_POW_EQUAL, \T_MOD_EQUAL, \T_AND_EQUAL, \T_OR_EQUAL, \T_XOR_EQUAL, \T_SL_EQUAL, \T_SR_EQUAL, \T_CONCAT_EQUAL], \true)) {
            if ($tokens[$nextPointer]['code'] === \T_EQUAL) {
                if (\SlevomatCodingStandard\Helpers\PropertyHelper::isProperty($phpcsFile, $variablePointer)) {
                    return \false;
                }
                if (\SlevomatCodingStandard\Helpers\ParameterHelper::isParameter($phpcsFile, $variablePointer)) {
                    return \false;
                }
            }
            return \true;
        }
        $actualPointer = $variablePointer;
        $parenthesisOpenerPointer = null;
        $parenthesisOwnerPointer = null;
        do {
            $parenthesisOpenerPointer = $this->findOpenerOfNestedParentheses($phpcsFile, $actualPointer);
            $parenthesisOwnerPointer = $this->findOwnerOfNestedParentheses($phpcsFile, $actualPointer);
            $actualPointer = $parenthesisOpenerPointer;
        } while ($parenthesisOwnerPointer === null && isset($tokens[$actualPointer]['nested_parenthesis']));
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
        if (\in_array($tokens[$nextPointer]['code'], [\T_INC, \T_DEC], \true) || \in_array($tokens[$previousPointer]['code'], [\T_INC, \T_DEC], \true)) {
            if ($parenthesisOwnerPointer === null) {
                return \true;
            }
            return !\in_array($tokens[$parenthesisOwnerPointer]['code'], [\T_FOR, \T_WHILE], \true);
        }
        if ($parenthesisOwnerPointer !== null && $tokens[$parenthesisOwnerPointer]['code'] === \T_FOREACH) {
            $pointerBeforeVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
            return \in_array($tokens[$pointerBeforeVariable]['code'], [\T_AS, \T_DOUBLE_ARROW], \true);
        }
        if ($parenthesisOpenerPointer !== null) {
            $pointerBeforeParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisOpenerPointer - 1);
            if ($tokens[$pointerBeforeParenthesisOpener]['code'] === \T_LIST) {
                return \true;
            }
        }
        $possibleShortListCloserPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$ineffectiveTokenCodes, [\T_VARIABLE, \T_COMMA]), $variablePointer + 1);
        if ($tokens[$possibleShortListCloserPointer]['code'] === \T_CLOSE_SHORT_ARRAY) {
            return $tokens[\SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $possibleShortListCloserPointer + 1)]['code'] === \T_EQUAL;
        }
        return \false;
    }
    private function isUsedAsParameter(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        $parenthesisOpenerPointer = $this->findOpenerOfNestedParentheses($phpcsFile, $variablePointer);
        if ($parenthesisOpenerPointer === null) {
            return \false;
        }
        if (!\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $parenthesisOpenerPointer, $variablePointer)) {
            return \false;
        }
        return $phpcsFile->getTokens()[\SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisOpenerPointer - 1)]['code'] === \T_STRING;
    }
    private function isUsedInForLoopCondition(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = $this->findOpenerOfNestedParentheses($phpcsFile, $variablePointer);
        if ($parenthesisOpenerPointer === null) {
            return \false;
        }
        $parenthesisOwnerPointer = $this->findOwnerOfNestedParentheses($phpcsFile, $variablePointer);
        if ($parenthesisOwnerPointer === null) {
            return \false;
        }
        if ($tokens[$parenthesisOwnerPointer]['code'] !== \T_FOR) {
            return \false;
        }
        for ($i = $parenthesisOpenerPointer + 1; $i < $tokens[$parenthesisOwnerPointer]['parenthesis_closer']; $i++) {
            if ($i === $variablePointer) {
                continue;
            }
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
    private function isDefinedInDoConditionAndUsedInLoop(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_PARENTHESIS, $variablePointer - 1);
        if ($parenthesisOpener === null || $tokens[$parenthesisOpener]['parenthesis_closer'] < $variablePointer) {
            return \false;
        }
        $whilePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisOpener - 1);
        if ($tokens[$whilePointer]['code'] !== \T_WHILE) {
            return \false;
        }
        $loopCloserPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $whilePointer - 1);
        if ($tokens[$loopCloserPointer]['code'] !== \T_CLOSE_CURLY_BRACKET) {
            return \false;
        }
        $doPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $tokens[$loopCloserPointer]['bracket_opener'] - 1);
        if ($tokens[$doPointer]['code'] !== \T_DO) {
            return \false;
        }
        return \SlevomatCodingStandard\Helpers\TokenHelper::findNextContent($phpcsFile, \T_VARIABLE, $variableName, $tokens[$loopCloserPointer]['bracket_opener'] + 1, $loopCloserPointer) !== null;
    }
    private function isUsedInLoopCycle(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $loopPointer = null;
        foreach (\array_reverse($tokens[$variablePointer]['conditions'], \true) as $conditionPointer => $conditionTokenCode) {
            if (\in_array($conditionTokenCode, \SlevomatCodingStandard\Helpers\TokenHelper::$functionTokenCodes, \true)) {
                break;
            }
            if (!\in_array($conditionTokenCode, [\T_FOREACH, \T_FOR, \T_DO, \T_WHILE], \true)) {
                continue;
            }
            $loopPointer = $conditionPointer;
            $loopConditionPointer = $conditionTokenCode === \T_DO ? \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$loopPointer]['scope_closer'] + 1) : $loopPointer;
            $variableUsedInLoopConditionPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextContent($phpcsFile, \T_VARIABLE, $variableName, $tokens[$loopConditionPointer]['parenthesis_opener'] + 1, $tokens[$loopConditionPointer]['parenthesis_closer']);
            if ($variableUsedInLoopConditionPointer === null || $variableUsedInLoopConditionPointer === $variablePointer) {
                continue;
            }
            if ($conditionTokenCode !== \T_FOREACH) {
                return \true;
            }
            $pointerBeforeVariableUsedInLoopCondition = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variableUsedInLoopConditionPointer - 1);
            if ($tokens[$pointerBeforeVariableUsedInLoopCondition]['code'] === \T_BITWISE_AND) {
                return \true;
            }
        }
        if ($loopPointer === null) {
            return \false;
        }
        for ($i = $tokens[$loopPointer]['scope_opener'] + 1; $i < $tokens[$loopPointer]['scope_closer']; $i++) {
            if (\in_array($tokens[$i]['code'], [\T_DOUBLE_QUOTED_STRING, \T_HEREDOC], \true) && \SlevomatCodingStandard\Helpers\VariableHelper::isUsedInScopeInString($phpcsFile, $variableName, $i)) {
                return \true;
            }
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            if (!$this->isAssignment($phpcsFile, $i)) {
                return \true;
            }
            $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $i + 1);
            if (!\in_array($tokens[$nextPointer]['code'], [\T_INC, \T_DEC, \T_PLUS_EQUAL, \T_MINUS_EQUAL, \T_MUL_EQUAL, \T_DIV_EQUAL, \T_POW_EQUAL, \T_MOD_EQUAL, \T_AND_EQUAL, \T_OR_EQUAL, \T_XOR_EQUAL, \T_SL_EQUAL, \T_SR_EQUAL, \T_CONCAT_EQUAL], \true)) {
                continue;
            }
            $parenthesisOwnerPointer = $this->findNestedParenthesisWithOwner($phpcsFile, $i);
            if ($parenthesisOwnerPointer !== null && \in_array($tokens[$parenthesisOwnerPointer]['code'], [\T_IF, \T_ELSEIF], \true)) {
                return \true;
            }
        }
        return \false;
    }
    private function isUsedAsKeyOrValueInArray(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $squareBracketOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_SQUARE_BRACKET, $variablePointer - 1);
        if ($squareBracketOpenerPointer !== null && $tokens[$squareBracketOpenerPointer]['bracket_closer'] > $variablePointer) {
            return \true;
        }
        $arrayOpenerPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_OPEN_SHORT_ARRAY, $variablePointer - 1);
        if ($arrayOpenerPointer === null) {
            return \false;
        }
        $arrayCloserPointer = $tokens[$arrayOpenerPointer]['bracket_closer'];
        if ($arrayCloserPointer < $variablePointer) {
            return \false;
        }
        $pointerAfterArrayCloser = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $arrayCloserPointer + 1);
        if ($tokens[$pointerAfterArrayCloser]['code'] === \T_EQUAL) {
            return \false;
        }
        $pointerBeforeVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
        if (\in_array($tokens[$pointerBeforeVariable]['code'], [\T_INC, \T_DEC], \true)) {
            $pointerBeforeVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $pointerBeforeVariable - 1);
        }
        return \in_array($tokens[$pointerBeforeVariable]['code'], [\T_OPEN_SHORT_ARRAY, \T_COMMA, \T_DOUBLE_ARROW], \true);
    }
    private function isValueInForeachAndErrorIsIgnored(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        if (!$this->ignoreUnusedValuesWhenOnlyKeysAreUsedInForeach) {
            return \false;
        }
        $tokens = $phpcsFile->getTokens();
        $parenthesisOwnerPointer = $this->findNestedParenthesisWithOwner($phpcsFile, $variablePointer);
        return $parenthesisOwnerPointer !== null && $tokens[$parenthesisOwnerPointer]['code'] === \T_FOREACH;
    }
    private function isStaticOrGlobalVariable(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        for ($i = $tokens[$functionPointer]['scope_opener'] + 1; $i < $tokens[$functionPointer]['scope_closer']; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            $pointerBeforeParameter = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if (\in_array($tokens[$pointerBeforeParameter]['code'], [\T_STATIC, \T_GLOBAL], \true)) {
                return \true;
            }
        }
        return \false;
    }
    private function isParameterPassedByReference(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        for ($i = $tokens[$functionPointer]['parenthesis_opener'] + 1; $i < $tokens[$functionPointer]['parenthesis_closer']; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            $pointerBeforeParameter = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if ($tokens[$pointerBeforeParameter]['code'] === \T_BITWISE_AND) {
                return \true;
            }
        }
        return \false;
    }
    private function isInheritedVariablePassedByReference(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, string $variableName) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $usePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $tokens[$functionPointer]['parenthesis_closer'] + 1);
        if ($tokens[$usePointer]['code'] !== \T_USE) {
            return \false;
        }
        $useParenthesisOpener = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $usePointer + 1);
        for ($i = $useParenthesisOpener + 1; $i < $tokens[$useParenthesisOpener]['parenthesis_closer']; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $variableName) {
                continue;
            }
            $pointerBeforeInheritedVariable = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $i - 1);
            if ($tokens[$pointerBeforeInheritedVariable]['code'] === \T_BITWISE_AND) {
                return \true;
            }
        }
        return \false;
    }
    private function isReference(\PHP_CodeSniffer\Files\File $phpcsFile, int $scopeOwnerPointer, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $scopeOpenerPointer = $tokens[$scopeOwnerPointer]['code'] === \T_OPEN_TAG ? $scopeOwnerPointer : $tokens[$scopeOwnerPointer]['scope_opener'];
        for ($i = $scopeOpenerPointer + 1; $i < $variablePointer; $i++) {
            if ($tokens[$i]['code'] !== \T_VARIABLE) {
                continue;
            }
            if ($tokens[$i]['content'] !== $tokens[$variablePointer]['content']) {
                continue;
            }
            $assigmentPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $i + 1);
            if ($tokens[$assigmentPointer]['code'] !== \T_EQUAL) {
                continue;
            }
            $referencePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $assigmentPointer + 1);
            if ($tokens[$referencePointer]['code'] === \T_BITWISE_AND) {
                return \true;
            }
        }
        return \false;
    }
    private function isPartOfStatementAndWithIncrementOrDecrementOperator(\PHP_CodeSniffer\Files\File $phpcsFile, int $variablePointer) : bool
    {
        $tokens = $phpcsFile->getTokens();
        $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $variablePointer - 1);
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $variablePointer + 1);
        if (\in_array($tokens[$previousPointer]['code'], [\T_DEC, \T_INC], \true)) {
            $previousPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $previousPointer - 1);
        } elseif ($nextPointer !== null && \in_array($tokens[$nextPointer]['code'], [\T_DEC, \T_INC], \true)) {
            // Nothing
        } else {
            return \false;
        }
        return \in_array($tokens[$previousPointer]['code'], \array_merge([\T_STRING_CONCAT], \PHP_CodeSniffer\Util\Tokens::$operators, \PHP_CodeSniffer\Util\Tokens::$assignmentTokens, \PHP_CodeSniffer\Util\Tokens::$booleanOperators), \true);
    }
    private function findNestedParenthesisWithOwner(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        if (!\array_key_exists('nested_parenthesis', $tokens[$pointer])) {
            return null;
        }
        foreach (\array_reverse(\array_keys($tokens[$pointer]['nested_parenthesis'])) as $nestedParenthesisOpener) {
            if (\array_key_exists('parenthesis_owner', $tokens[$nestedParenthesisOpener])) {
                return $tokens[$nestedParenthesisOpener]['parenthesis_owner'];
            }
        }
        return null;
    }
    private function findOpenerOfNestedParentheses(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        if (!\array_key_exists('nested_parenthesis', $tokens[$pointer])) {
            return null;
        }
        return \array_reverse(\array_keys($tokens[$pointer]['nested_parenthesis']))[0];
    }
    private function findOwnerOfNestedParentheses(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = $this->findOpenerOfNestedParentheses($phpcsFile, $pointer);
        if ($parenthesisOpenerPointer === null) {
            return null;
        }
        return \array_key_exists('parenthesis_owner', $tokens[$parenthesisOpenerPointer]) ? $tokens[$parenthesisOpenerPointer]['parenthesis_owner'] : null;
    }
}
