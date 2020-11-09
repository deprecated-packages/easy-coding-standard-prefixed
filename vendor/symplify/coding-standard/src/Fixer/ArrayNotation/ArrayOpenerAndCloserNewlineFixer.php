<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\ArrayNotation;

use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\CodingStandard\Fixer\AbstractArrayFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer\ArrayOpenerAndCloserNewlineFixerTest
 */
final class ArrayOpenerAndCloserNewlineFixer extends \Symplify\CodingStandard\Fixer\AbstractArrayFixer implements \Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface
{
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Indexed PHP array opener [ and closer ] must be on own line';
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition(self::ERROR_MESSAGE, []);
    }
    public function fixArrayOpener(\PhpCsFixer\Tokenizer\Tokens $tokens, \Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo $blockInfo, int $index) : void
    {
        if ($this->isNextTokenAlsoArrayOpener($tokens, $index)) {
            return;
        }
        // no items
        $itemCount = $this->arrayAnalyzer->getItemCount($tokens, $blockInfo);
        if ($itemCount === 0) {
            return;
        }
        if (!$this->arrayAnalyzer->isIndexedList($tokens, $blockInfo)) {
            return;
        }
        // closer must run before the opener, as tokens as added by traversing up
        $this->handleArrayCloser($tokens, $blockInfo->getEnd());
        $this->handleArrayOpener($tokens, $index);
    }
    public function getPriority() : int
    {
        return $this->getPriorityBefore(\Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer::class);
    }
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition(self::ERROR_MESSAGE, [new \Symplify\RuleDocGenerator\ValueObject\CodeSample(<<<'CODE_SAMPLE'
$items = [1 => 'Hey'];
CODE_SAMPLE
, <<<'CODE_SAMPLE'
$items = [
1 => 'Hey'
];
CODE_SAMPLE
)]);
    }
    private function isNextTokenAlsoArrayOpener(\PhpCsFixer\Tokenizer\Tokens $tokens, int $index) : bool
    {
        $nextMeaningFullTokenPosition = $tokens->getNextMeaningfulToken($index);
        if ($nextMeaningFullTokenPosition === null) {
            return \false;
        }
        $nextMeaningFullToken = $tokens[$nextMeaningFullTokenPosition];
        return $nextMeaningFullToken->isGivenKind(self::ARRAY_OPEN_TOKENS);
    }
    private function handleArrayCloser(\PhpCsFixer\Tokenizer\Tokens $tokens, int $arrayCloserPosition) : void
    {
        $preArrayCloserPosition = $arrayCloserPosition - 1;
        /** @var Token|null $previousCloserToken */
        $previousCloserToken = $tokens[$preArrayCloserPosition] ?? null;
        if ($previousCloserToken === null) {
            return;
        }
        // already whitespace
        if ($previousCloserToken->isGivenKind(\T_WHITESPACE)) {
            return;
        }
        $tokens->ensureWhitespaceAtIndex($preArrayCloserPosition, 1, $this->whitespacesFixerConfig->getLineEnding());
    }
    private function handleArrayOpener(\PhpCsFixer\Tokenizer\Tokens $tokens, int $arrayOpenerPosition) : void
    {
        $postArrayOpenerPosition = $arrayOpenerPosition + 1;
        /** @var Token|null $nextToken */
        $nextToken = $tokens[$postArrayOpenerPosition] ?? null;
        if ($nextToken === null) {
            return;
        }
        // already is whitespace
        if ($nextToken->isGivenKind(\T_WHITESPACE)) {
            return;
        }
        $tokens->ensureWhitespaceAtIndex($postArrayOpenerPosition, 0, $this->whitespacesFixerConfig->getLineEnding());
    }
}
