<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\NodeVisitor;

use _PhpScoper8acb416c2f5a\PhpParser\Node;
use _PhpScoper8acb416c2f5a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper8acb416c2f5a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper8acb416c2f5a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
