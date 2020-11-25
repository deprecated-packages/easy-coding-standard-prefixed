<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\NodeVisitor;

use _PhpScoperaac5f7c652e4\PhpParser\Node;
use _PhpScoperaac5f7c652e4\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperaac5f7c652e4\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperaac5f7c652e4\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
