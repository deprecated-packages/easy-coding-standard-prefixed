<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\NodeVisitor;

use _PhpScoperfb2c402b972b\PhpParser\Node;
use _PhpScoperfb2c402b972b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfb2c402b972b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfb2c402b972b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
