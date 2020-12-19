<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\NodeVisitor;

use _PhpScoper065e4ba46e6d\PhpParser\Node;
use _PhpScoper065e4ba46e6d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper065e4ba46e6d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper065e4ba46e6d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
