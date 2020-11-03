<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Fixer\ArrayNotation;

use PhpCsFixer\Tokenizer\CT;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\WhitespacesFixerConfig;
use SplFileInfo;
use Symplify\CodingStandard\Contract\ArrayFixerInterface;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer;
use Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\ArrayAnalyzer;
use Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\BlockFinder;
abstract class AbstractArrayFixer extends \Symplify\CodingStandard\Fixer\AbstractSymplifyFixer implements \Symplify\CodingStandard\Contract\ArrayFixerInterface
{
    /**
     * @var int[]
     */
    protected const ARRAY_OPEN_TOKENS = [\T_ARRAY, \PhpCsFixer\Tokenizer\CT::T_ARRAY_SQUARE_BRACE_OPEN];
    /**
     * @var WhitespacesFixerConfig
     */
    protected $whitespacesFixerConfig;
    /**
     * @var ArrayAnalyzer
     */
    protected $arrayAnalyzer;
    /**
     * @var BlockFinder
     */
    private $blockFinder;
    /**
     * @required
     */
    public function autowireAbstractArrayFixer(\Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\BlockFinder $blockFinder, \PhpCsFixer\WhitespacesFixerConfig $whitespacesFixerConfig, \Symplify\CodingStandard\TokenRunner\Analyzer\FixerAnalyzer\ArrayAnalyzer $arrayAnalyzer) : void
    {
        $this->blockFinder = $blockFinder;
        $this->whitespacesFixerConfig = $whitespacesFixerConfig;
        $this->arrayAnalyzer = $arrayAnalyzer;
    }
    public function isCandidate(\PhpCsFixer\Tokenizer\Tokens $tokens) : bool
    {
        return $tokens->isAnyTokenKindsFound(self::ARRAY_OPEN_TOKENS) && $tokens->isTokenKindFound(\T_DOUBLE_ARROW);
    }
    public function fix(\SplFileInfo $file, \PhpCsFixer\Tokenizer\Tokens $tokens) : void
    {
        $reverseTokens = $this->reverseTokens($tokens);
        foreach ($reverseTokens as $index => $token) {
            if (!$token->isGivenKind(self::ARRAY_OPEN_TOKENS)) {
                continue;
            }
            $blockInfo = $this->blockFinder->findInTokensByEdge($tokens, $index);
            if ($blockInfo === null) {
                continue;
            }
            $this->fixArrayOpener($tokens, $blockInfo, $index);
        }
    }
    public function getPriority() : int
    {
        // to handle the indent
        return $this->getPriorityBefore(\Symplify\CodingStandard\Fixer\LineLength\LineLengthFixer::class);
    }
}
