<?php

declare (strict_types=1);
namespace _PhpScoper89ec3c69e67d\PhpParser\NodeVisitor;

use _PhpScoper89ec3c69e67d\PhpParser\Node;
use _PhpScoper89ec3c69e67d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper89ec3c69e67d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper89ec3c69e67d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
