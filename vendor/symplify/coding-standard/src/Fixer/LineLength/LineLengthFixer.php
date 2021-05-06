<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\LineLength;

use _PhpScopere7e518ee6a5b\Nette\Utils\Strings;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\TokenAnalyzer\FunctionCallNameMatcher;
use Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\BlockFinder;
use Symplify\CodingStandard\TokenRunner\Transformer\FixerTransformer\LineLengthTransformer;
use Symplify\CodingStandard\TokenRunner\ValueObject\BlockInfo;
use Symplify\RuleDocGenerator\Contract\ConfigurableRuleInterface;
use Symplify\RuleDocGenerator\Contract\DocumentedRuleInterface;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\ConfiguredCodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use Symplify\SymplifyKernel\Exception\ShouldNotHappenException;
/**
 * @see \Symplify\CodingStandard\Tests\Fixer\LineLength\LineLengthFixer\LineLengthFixerTest
 * @see \Symplify\CodingStandard\Tests\Fixer\LineLength\LineLengthFixer\ConfiguredLineLengthFixerTest
 */
final class LineLengthFixer extends AbstractSymplifyFixer implements ConfigurableRuleInterface, ConfigurableFixerInterface, DocumentedRuleInterface
{
    /**
     * @api
     * @var string
     */
    public const LINE_LENGTH = 'line_length';
    /**
     * @api
     * @var string
     */
    public const BREAK_LONG_LINES = 'break_long_lines';
    /**
     * @api
     * @var string
     */
    public const INLINE_SHORT_LINES = 'inline_short_lines';
    /**
     * @var string
     */
    private const ERROR_MESSAGE = 'Array items, method parameters, method call arguments, new arguments should be on same/standalone line to fit line length.';
    /**
     * @var int
     */
    private const DEFAULT_LINE_LENGHT = 120;
    /**
     * @var int
     */
    private $lineLength = self::DEFAULT_LINE_LENGHT;
    /**
     * @var bool
     */
    private $breakLongLines = \true;
    /**
     * @var bool
     */
    private $inlineShortLines = \true;
    /**
     * @var LineLengthTransformer
     */
    private $lineLengthTransformer;
    /**
     * @var BlockFinder
     */
    private $blockFinder;
    /**
     * @var FunctionCallNameMatcher
     */
    private $functionCallNameMatcher;
    public function __construct(LineLengthTransformer $lineLengthTransformer, BlockFinder $blockFinder, FunctionCallNameMatcher $functionCallNameMatcher)
    {
        $this->lineLengthTransformer = $lineLengthTransformer;
        $this->blockFinder = $blockFinder;
        $this->functionCallNameMatcher = $functionCallNameMatcher;
    }
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition(self::ERROR_MESSAGE, []);
    }
    /**
     * @param Tokens<Token> $tokens
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound([
            // "["
            \T_ARRAY,
            // "array"()
            CT::T_ARRAY_SQUARE_BRACE_OPEN,
            '(',
            ')',
            // "function"
            \T_FUNCTION,
            // "use" (...)
            CT::T_USE_LAMBDA,
            // "new"
            \T_NEW,
        ]);
    }
    /**
     * @param Tokens<Token> $tokens
     */
    public function fix(SplFileInfo $file, Tokens $tokens) : void
    {
        // function arguments, function call parameters, lambda use()
        for ($position = \count($tokens) - 1; $position >= 0; --$position) {
            /** @var Token $token */
            $token = $tokens[$position];
            if ($token->equals(')')) {
                $this->processMethodCall($tokens, $position);
                continue;
            }
            // opener
            if ($token->isGivenKind([\T_FUNCTION, CT::T_USE_LAMBDA, \T_NEW])) {
                $this->processFunctionOrArray($tokens, $position);
                continue;
            }
            // closer
            if ($token->isGivenKind(CT::T_ARRAY_SQUARE_BRACE_CLOSE) || $token->equals(')') && $token->isArray()) {
                $this->processFunctionOrArray($tokens, $position);
            }
        }
    }
    public function getRuleDefinition() : RuleDefinition
    {
        return new RuleDefinition(self::ERROR_MESSAGE, [new ConfiguredCodeSample(<<<'CODE_SAMPLE'
function some($veryLong, $superLong, $oneMoreTime)
{
}

function another(
    $short,
    $now
) {
}
CODE_SAMPLE
, <<<'CODE_SAMPLE'
function some(
    $veryLong,
    $superLong,
    $oneMoreTime
) {
}

function another($short, $now) {
}
CODE_SAMPLE
, [self::LINE_LENGTH => 40])]);
    }
    /**
     * Must run before
     *
     * @see \PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer
     */
    public function getPriority() : int
    {
        return 5;
    }
    public function configure(?array $configuration = null) : void
    {
        $this->lineLength = $configuration[self::LINE_LENGTH] ?? self::DEFAULT_LINE_LENGHT;
        $this->breakLongLines = $configuration[self::BREAK_LONG_LINES] ?? \true;
        $this->inlineShortLines = $configuration[self::INLINE_SHORT_LINES] ?? \true;
    }
    public function getConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        throw new ShouldNotHappenException();
    }
    /**
     * @param Tokens<Token> $tokens
     */
    private function processMethodCall(Tokens $tokens, int $position) : void
    {
        $methodNamePosition = $this->functionCallNameMatcher->matchName($tokens, $position);
        if ($methodNamePosition === null) {
            return;
        }
        $blockInfo = $this->blockFinder->findInTokensByPositionAndContent($tokens, $methodNamePosition, '(');
        if (!$blockInfo instanceof BlockInfo) {
            return;
        }
        // has comments => dangerous to change: https://github.com/symplify/symplify/issues/973
        $comments = $tokens->findGivenKind(\T_COMMENT, $blockInfo->getStart(), $blockInfo->getEnd());
        if ($comments !== []) {
            return;
        }
        $this->lineLengthTransformer->fixStartPositionToEndPosition($blockInfo, $tokens, $this->lineLength, $this->breakLongLines, $this->inlineShortLines);
    }
    /**
     * @param Tokens<Token> $tokens
     */
    private function processFunctionOrArray(Tokens $tokens, int $position) : void
    {
        $blockInfo = $this->blockFinder->findInTokensByEdge($tokens, $position);
        if (!$blockInfo instanceof BlockInfo) {
            return;
        }
        if ($this->shouldSkip($tokens, $blockInfo)) {
            return;
        }
        $this->lineLengthTransformer->fixStartPositionToEndPosition($blockInfo, $tokens, $this->lineLength, $this->breakLongLines, $this->inlineShortLines);
    }
    /**
     * @param Tokens<Token> $tokens
     */
    private function shouldSkip(Tokens $tokens, BlockInfo $blockInfo) : bool
    {
        // no items inside => skip
        if ($blockInfo->getEnd() - $blockInfo->getStart() <= 1) {
            return \true;
        }
        if ($this->isHerenowDoc($tokens, $blockInfo)) {
            return \true;
        }
        // is array with indexed values "=>"
        $doubleArrowTokens = $tokens->findGivenKind(\T_DOUBLE_ARROW, $blockInfo->getStart(), $blockInfo->getEnd());
        if ($doubleArrowTokens !== []) {
            return \true;
        }
        // has comments => dangerous to change: https://github.com/symplify/symplify/issues/973
        return (bool) $tokens->findGivenKind(\T_COMMENT, $blockInfo->getStart(), $blockInfo->getEnd());
    }
    /**
     * @param Tokens<Token> $tokens
     */
    private function isHerenowDoc(Tokens $tokens, BlockInfo $blockInfo) : bool
    {
        // heredoc/nowdoc => skip
        $nextToken = $this->getNextMeaningfulToken($tokens, $blockInfo->getStart());
        if (!$nextToken instanceof Token) {
            return \false;
        }
        return Strings::contains($nextToken->getContent(), '<<<');
    }
}
