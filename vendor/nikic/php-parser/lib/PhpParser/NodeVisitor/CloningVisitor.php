<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\NodeVisitor;

use _PhpScoper21c6ce8bfe5d\PhpParser\Node;
use _PhpScoper21c6ce8bfe5d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper21c6ce8bfe5d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper21c6ce8bfe5d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
