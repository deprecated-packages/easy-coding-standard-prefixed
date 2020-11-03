<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\NodeVisitor;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
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
    public function enterNode(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : ?\_PhpScoper2b44cb0c30af\PhpParser\Node
    {
        if (!$this->isIncrementingNode($node)) {
            return null;
        }
        $this->cognitiveComplexityDataCollector->increaseOperation();
        return null;
    }
}
