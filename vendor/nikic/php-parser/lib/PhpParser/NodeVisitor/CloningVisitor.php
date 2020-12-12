<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\NodeVisitor;

use _PhpScoper8a05d21c15c9\PhpParser\Node;
use _PhpScoper8a05d21c15c9\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper8a05d21c15c9\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper8a05d21c15c9\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
