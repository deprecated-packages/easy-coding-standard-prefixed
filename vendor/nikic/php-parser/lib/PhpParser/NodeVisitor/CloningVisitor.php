<?php

declare (strict_types=1);
namespace _PhpScoper2a48669dad72\PhpParser\NodeVisitor;

use _PhpScoper2a48669dad72\PhpParser\Node;
use _PhpScoper2a48669dad72\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper2a48669dad72\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper2a48669dad72\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
