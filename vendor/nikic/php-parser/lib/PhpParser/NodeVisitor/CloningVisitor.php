<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\NodeVisitor;

use _PhpScopera40fc53e636b\PhpParser\Node;
use _PhpScopera40fc53e636b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera40fc53e636b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera40fc53e636b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
