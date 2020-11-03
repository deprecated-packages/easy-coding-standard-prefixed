<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\NodeVisitor;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Ternary;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Catch_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Do_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\For_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\While_;
use Symplify\CodingStandard\CognitiveComplexity\DataCollector\CognitiveComplexityDataCollector;
final class NestingNodeVisitor extends \Symplify\CodingStandard\CognitiveComplexity\NodeVisitor\AbstractComplexityNodeVisitor
{
    /**
     * @var class-string[]
     */
    private const NESTING_NODE_TYPES = [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\For_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\While_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Catch_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Closure::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Do_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Ternary::class];
    /**
     * @var int
     */
    private $measuredNestingLevel = 1;
    /**
     * @var int
     */
    private $previousNestingLevel = 0;
    /**
     * @var CognitiveComplexityDataCollector
     */
    private $cognitiveComplexityDataCollector;
    public function __construct(\Symplify\CodingStandard\CognitiveComplexity\DataCollector\CognitiveComplexityDataCollector $cognitiveComplexityDataCollector)
    {
        $this->cognitiveComplexityDataCollector = $cognitiveComplexityDataCollector;
    }
    public function reset() : void
    {
        $this->measuredNestingLevel = 1;
    }
    public function enterNode(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : ?\_PhpScoper8de082cbb8c7\PhpParser\Node
    {
        if ($this->isNestingNode($node)) {
            ++$this->measuredNestingLevel;
        }
        if (!$this->isIncrementingNode($node)) {
            return null;
        }
        if ($this->isBreakingNode($node)) {
            $this->previousNestingLevel = $this->measuredNestingLevel;
            return null;
        }
        // B2. Nesting level
        if ($this->measuredNestingLevel > 1 && $this->previousNestingLevel < $this->measuredNestingLevel) {
            // only going deeper, not on the same level
            $nestingComplexity = $this->measuredNestingLevel - 2;
            $this->cognitiveComplexityDataCollector->increaseNesting($nestingComplexity);
        }
        $this->previousNestingLevel = $this->measuredNestingLevel;
        return null;
    }
    public function leaveNode(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : ?\_PhpScoper8de082cbb8c7\PhpParser\Node
    {
        if ($this->isNestingNode($node)) {
            --$this->measuredNestingLevel;
        }
        return null;
    }
    private function isNestingNode(\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : bool
    {
        return $this->isNodeOfTypes($node, self::NESTING_NODE_TYPES);
    }
}
