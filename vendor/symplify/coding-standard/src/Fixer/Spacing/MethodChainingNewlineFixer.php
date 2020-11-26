<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\Spacing;

use _PhpScoper8acb416c2f5a\Nette\Utils\Strings;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\WhitespacesFixerConfig;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\BlockFinder;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\Spacing\MethodChainingNewlineFixer\MethodChainingNewlineFixerTest
 */
final class MethodChainingNewlineFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer implements \Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface
{
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Each chain method call must be on own line';
    /**
     * @var WhitespacesFixerConfig
     */
    private $whitespacesFixerConfig;
    /**
     * @var BlockFinder
     */
    private $blockFinder;
    /**
     * @var int
     */
    private $bracketNesting = 0;
    public function __construct(\PhpCsFixer\WhitespacesFixerConfig $whitespacesFixerConfig, \Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\BlockFinder $blockFinder)
    {
        $this->whitespacesFixerConfig = $whitespacesFixerConfig;
        $this->blockFinder = $blockFinder;
    }
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition(self::ERROR_MESSAGE, []);
    }
    public function getPriority() : int
    {
        return $this->getPriorityBefore(\PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer::class);
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([\T_OBJECT_OPERATOR]);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        // function arguments, function call parameters, lambda use()
        for ($index = 1, $count = \count($tokens); $index < $count; ++$index) {
            $currentToken = $tokens[$index];
            if (!$currentToken->isGivenKind(\T_OBJECT_OPERATOR)) {
                continue;
            }
            if (!$this->shouldPrefixNewline($tokens, $index)) {
                continue;
            }
            $tokens->ensureWhitespaceAtIndex($index, 0, $this->whitespacesFixerConfig->getLineEnding());
            ++$index;
        }
    }
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition(self::ERROR_MESSAGE, [new \Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample(<<<'CODE_SAMPLE'
$someClass->firstCall()->secondCall();
CODE_SAMPLE
, <<<'CODE_SAMPLE'
$someClass->firstCall()
->secondCall();
CODE_SAMPLE
)]);
    }
    private function shouldPrefixNewline(\PhpCsFixer\Tokenizer\Tokens $tokens, int $objectOperatorIndex) : bool
    {
        for ($i = $objectOperatorIndex; $i >= 0; --$i) {
            /** @var Token $currentToken */
            $currentToken = $tokens[$i];
            if ($currentToken->equals(')')) {
                return $this->shouldBracketPrefix($tokens, $i, $objectOperatorIndex);
            }
            if ($currentToken->isGivenKind([\T_NEW, \T_VARIABLE])) {
                return \false;
            }
            if ($currentToken->getContent() === '(') {
                return \false;
            }
        }
        return \false;
    }
    private function isDoubleBracket(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : bool
    {
        /** @var int $nextTokenPosition */
        $nextTokenPosition = $tokens->getNextNonWhitespace($position);
        /** @var Token $nextToken */
        $nextToken = $tokens[$nextTokenPosition];
        return $nextToken->getContent() === ')';
    }
    /**
     * Matches e.g.:
     * - someMethod($this->some()->method())
     * - [$this->some()->method()]
     * - ' ' . $this->some()->method()
     */
    private function isPartOfMethodCallOrArray(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : bool
    {
        $this->bracketNesting = 0;
        for ($i = $position; $i >= 0; --$i) {
            /** @var Token $currentToken */
            $currentToken = $tokens[$i];
            // break
            if ($this->isNewlineToken($currentToken)) {
                return \false;
            }
            if ($this->isBreakingChar($currentToken)) {
                return \true;
            }
            if ($this->shouldBreakOnBracket($currentToken)) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * Matches e..g:
     * - return app()->some()
     * - app()->some()
     * - (clone app)->some()
     */
    private function isPreceededByFuncCall(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : bool
    {
        for ($i = $position; $i >= 0; --$i) {
            /** @var Token $currentToken */
            $currentToken = $tokens[$i];
            if ($currentToken->getContent() === 'clone') {
                return \true;
            }
            if ($currentToken->getContent() === '(') {
                return $this->doesContentBeforeBracketRequireNewline($tokens, $i);
            }
            if ($this->isNewlineToken($currentToken)) {
                return \false;
            }
        }
        return \false;
    }
    private function isNewlineToken(\PhpCsFixer\Tokenizer\Token $currentToken) : bool
    {
        if (!$currentToken->isWhitespace()) {
            return \false;
        }
        return \_PhpScoper8acb416c2f5a\Nette\Utils\Strings::contains($currentToken->getContent(), "\n");
    }
    /**
     * Matches e.g.:
     * - app([
     *   ])->some()
     */
    private function isPreceededByOpenedCallInAnotherBracket(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position) : bool
    {
        $blockInfo = $this->blockFinder->findInTokensByEdge($tokens, $position);
        if ($blockInfo === null) {
            return \false;
        }
        return $tokens->isPartialCodeMultiline($blockInfo->getStart(), $blockInfo->getEnd());
    }
    private function shouldBracketPrefix(\PhpCsFixer\Tokenizer\Tokens $tokens, int $position, int $objectOperatorIndex) : bool
    {
        if ($this->isDoubleBracket($tokens, $position)) {
            return \false;
        }
        if ($this->isPartOfMethodCallOrArray($tokens, $position)) {
            return \false;
        }
        if ($this->isPreceededByFuncCall($tokens, $position)) {
            return \false;
        }
        if ($this->isPreceededByOpenedCallInAnotherBracket($tokens, $position)) {
            return \false;
        }
        // all good, there is a newline
        return !$tokens->isPartialCodeMultiline($position, $objectOperatorIndex);
    }
    private function isBreakingChar(\PhpCsFixer\Tokenizer\Token $currentToken) : bool
    {
        if ($currentToken->isGivenKind([\PhpCsFixer\Tokenizer\CT::T_ARRAY_SQUARE_BRACE_OPEN, \T_ARRAY, \T_DOUBLE_COLON])) {
            return \true;
        }
        if ($currentToken->getContent() === '[') {
            return \true;
        }
        return $currentToken->getContent() === '.';
    }
    private function shouldBreakOnBracket(\PhpCsFixer\Tokenizer\Token $token) : bool
    {
        if ($token->getContent() === ')') {
            --$this->bracketNesting;
            return \false;
        }
        if ($token->getContent() === '(') {
            if ($this->bracketNesting !== 0) {
                ++$this->bracketNesting;
                return \false;
            }
            return \true;
        }
        return \false;
    }
    private function doesContentBeforeBracketRequireNewline(\PhpCsFixer\Tokenizer\Tokens $tokens, int $i) : bool
    {
        $previousMeaningfulTokenPosition = $tokens->getPrevNonWhitespace($i);
        if ($previousMeaningfulTokenPosition === null) {
            return \false;
        }
        $previousToken = $tokens[$previousMeaningfulTokenPosition];
        if (!$previousToken->isGivenKind(\T_STRING)) {
            return \false;
        }
        $previousPreviousMeaningfulTokenPosition = $tokens->getPrevNonWhitespace($previousMeaningfulTokenPosition);
        if ($previousPreviousMeaningfulTokenPosition === null) {
            return \false;
        }
        $previousPreviousToken = $tokens[$previousPreviousMeaningfulTokenPosition];
        if ($previousPreviousToken->getContent() === '{') {
            return \true;
        }
        // is a function
        return $previousPreviousToken->isGivenKind([\T_RETURN, \T_DOUBLE_COLON, T_OPEN_CURLY_BRACKET]);
    }
}
