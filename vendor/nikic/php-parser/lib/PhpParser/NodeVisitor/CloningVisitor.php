<?php

declare (strict_types=1);
namespace _PhpScoper96382aaac118\PhpParser\NodeVisitor;

use _PhpScoper96382aaac118\PhpParser\Node;
use _PhpScoper96382aaac118\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper96382aaac118\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper96382aaac118\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
