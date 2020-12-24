<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser\NodeVisitor;

use _PhpScoper5ca2d8bcb02c\PhpParser\Node;
use _PhpScoper5ca2d8bcb02c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper5ca2d8bcb02c\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper5ca2d8bcb02c\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
