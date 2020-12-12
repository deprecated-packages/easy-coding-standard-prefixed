<?php

declare (strict_types=1);
namespace _PhpScoper83b3b9a317c0\PhpParser\NodeVisitor;

use _PhpScoper83b3b9a317c0\PhpParser\Node;
use _PhpScoper83b3b9a317c0\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper83b3b9a317c0\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper83b3b9a317c0\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
