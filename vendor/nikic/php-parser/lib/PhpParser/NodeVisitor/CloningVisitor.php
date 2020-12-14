<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\NodeVisitor;

use _PhpScoper6224e3b16fcc\PhpParser\Node;
use _PhpScoper6224e3b16fcc\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper6224e3b16fcc\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper6224e3b16fcc\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
