<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\NodeVisitor;

use _PhpScoper3d04c8135695\PhpParser\Node;
use Symplify\CodingStandard\CognitiveComplexity\DataCollector\CognitiveComplexityDataCollector;
final class ComplexityNodeVisitor extends \Symplify\CodingStandard\CognitiveComplexity\NodeVisitor\AbstractComplexityNodeVisitor
{
    /**
     * @var CognitiveComplexityDataCollector
     */
    private $cognitiveComplexityDataCollector;
    public function __construct(\Symplify\CodingStandard\CognitiveComplexity\DataCollector\CognitiveComplexityDataCollector $cognitiveComplexityDataCollector)
    {
        $this->cognitiveComplexityDataCollector = $cognitiveComplexityDataCollector;
    }
    public function enterNode(\_PhpScoper3d04c8135695\PhpParser\Node $node) : ?\_PhpScoper3d04c8135695\PhpParser\Node
    {
        if (!$this->isIncrementingNode($node)) {
            return null;
        }
        $this->cognitiveComplexityDataCollector->increaseOperation();
        return null;
    }
}
