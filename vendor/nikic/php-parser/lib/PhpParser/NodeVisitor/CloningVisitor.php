<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d\PhpParser\NodeVisitor;

use _PhpScoper87c77ad5700d\PhpParser\Node;
use _PhpScoper87c77ad5700d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper87c77ad5700d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper87c77ad5700d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
