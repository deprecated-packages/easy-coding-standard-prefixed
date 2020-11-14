<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\NodeVisitor;

use _PhpScoper229e8121cf9f\PhpParser\Node;
use _PhpScoper229e8121cf9f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper229e8121cf9f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper229e8121cf9f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
