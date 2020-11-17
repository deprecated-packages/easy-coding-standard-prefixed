<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser\NodeVisitor;

use _PhpScoper2a8ad010dfbd\PhpParser\Node;
use _PhpScoper2a8ad010dfbd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper2a8ad010dfbd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper2a8ad010dfbd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
