<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\ArrayNotation;

use PhpCsFixer\Fixer\ArrayNotation\TrailingCommaInMultilineArrayFixer;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use Symplify\CodingStandard\Fixer\AbstractArrayFixer;
use Symplify\CodingStandard\TokenRunner\Transformer\FixerTransformer\LineLengthTransformer;
use Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo;
use Symplify\CodingStandard\TokenRunner\ValueObject\LineKind;
use Symplify\CodingStandard\TokenRunner\Wrapper\FixerWrapper\ArrayWrapperFactory;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer\StandaloneLineInMultilineArrayFixerTest
 */
final class StandaloneLineInMultilineArrayFixer extends \Symplify\CodingStandard\Fixer\AbstractArrayFixer implements \Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface
{
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Indexed arrays must have 1 item per line';
    /**
     * @var LineLengthTransformer
     */
    private $lineLengthTransformer;
    /**
     * @var ArrayWrapperFactory
     */
    private $arrayWrapperFactory;
    public function __construct(\Symplify\CodingStandard\TokenRunner\Transformer\FixerTransformer\LineLengthTransformer $lineLengthTransformer, \Symplify\CodingStandard\TokenRunner\Wrapper\FixerWrapper\ArrayWrapperFactory $arrayWrapperFactory)
    {
        $this->lineLengthTransformer = $lineLengthTransformer;
        $this->arrayWrapperFactory = $arrayWrapperFactory;
    }
    public function getDefinition() : \PhpCsFixer\FixerDefinition\FixerDefinitionInterface
    {
        return new \PhpCsFixer\FixerDefinition\FixerDefinition(self::ERROR_MESSAGE, []);
    }
    public function fixArrayOpener(\PhpCsFixer\Tokenizer\Tokens $tokens, \Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo $blockInfo, int $index) : void
    {
        if ($this->shouldSkip($tokens, $blockInfo)) {
            return;
        }
        $this->lineLengthTransformer->breakItems($blockInfo, $tokens, \Symplify\CodingStandard\TokenRunner\ValueObject\LineKind::ARRAYS);
    }
    public function getPriority() : int
    {
        return $this->getPriorityBefore(\PhpCsFixer\Fixer\ArrayNotation\TrailingCommaInMultilineArrayFixer::class);
    }
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition(self::ERROR_MESSAGE, [new \Symplify\RuleDocGenerator\ValueObject\CodeSample(<<<'CODE_SAMPLE'
$friends = [1 => 'Peter', 2 => 'Paul'];
CODE_SAMPLE
, <<<'CODE_SAMPLE'
$friends = [
    1 => 'Peter',
    2 => 'Paul'
];
CODE_SAMPLE
)]);
    }
    /**
     * skip: [$array => value]
     * keep: [$array => [value => nested]]
     */
    private function shouldSkip(\PhpCsFixer\Tokenizer\Tokens $tokens, \Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo $blockInfo) : bool
    {
        $arrayWrapper = $this->arrayWrapperFactory->createFromTokensAndBlockInfo($tokens, $blockInfo);
        if (!$arrayWrapper->isAssociativeArray()) {
            return \true;
        }
        if ($arrayWrapper->getItemCount() === 1 && !$arrayWrapper->isFirstItemArray()) {
            $previousTokenPosition = $tokens->getPrevMeaningfulToken($blockInfo->getStart());
            if ($previousTokenPosition === null) {
                return \false;
            }
            /** @var Token $previousToken */
            $previousToken = $tokens[$previousTokenPosition];
            return !$previousToken->isGivenKind(\T_DOUBLE_ARROW);
        }
        return \false;
    }
}
