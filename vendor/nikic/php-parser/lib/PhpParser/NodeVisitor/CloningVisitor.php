<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\NodeVisitor;

use _PhpScoper04022cd986ec\PhpParser\Node;
use _PhpScoper04022cd986ec\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper04022cd986ec\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper04022cd986ec\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
