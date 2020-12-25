<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\NodeVisitor;

use _PhpScoper64ca614e27fd\PhpParser\Node;
use _PhpScoper64ca614e27fd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper64ca614e27fd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper64ca614e27fd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
