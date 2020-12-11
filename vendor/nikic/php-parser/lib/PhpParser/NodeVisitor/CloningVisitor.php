<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\NodeVisitor;

use _PhpScoperc7c7dddc9238\PhpParser\Node;
use _PhpScoperc7c7dddc9238\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperc7c7dddc9238\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperc7c7dddc9238\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
