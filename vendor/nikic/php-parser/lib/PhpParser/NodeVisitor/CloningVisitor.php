<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser\NodeVisitor;

use _PhpScoper47644ab3aa9a\PhpParser\Node;
use _PhpScoper47644ab3aa9a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper47644ab3aa9a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper47644ab3aa9a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
