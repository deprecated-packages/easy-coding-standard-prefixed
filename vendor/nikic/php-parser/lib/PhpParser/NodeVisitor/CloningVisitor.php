<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\NodeVisitor;

use _PhpScoperfa521053d812\PhpParser\Node;
use _PhpScoperfa521053d812\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfa521053d812\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfa521053d812\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
