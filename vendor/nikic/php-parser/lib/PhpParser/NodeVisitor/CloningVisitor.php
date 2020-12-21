<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\NodeVisitor;

use _PhpScoperfcf15c26e033\PhpParser\Node;
use _PhpScoperfcf15c26e033\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfcf15c26e033\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfcf15c26e033\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
