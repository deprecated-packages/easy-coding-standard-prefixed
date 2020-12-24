<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\NodeVisitor;

use _PhpScopere106f9fd4493\PhpParser\Node;
use _PhpScopere106f9fd4493\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopere106f9fd4493\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopere106f9fd4493\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
