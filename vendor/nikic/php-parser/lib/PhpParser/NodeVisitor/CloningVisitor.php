<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PhpParser\NodeVisitor;

use _PhpScoper992f4af8b9e0\PhpParser\Node;
use _PhpScoper992f4af8b9e0\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper992f4af8b9e0\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper992f4af8b9e0\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
