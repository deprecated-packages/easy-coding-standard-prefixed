<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06\PhpParser\NodeVisitor;

use _PhpScopera04bf8e97c06\PhpParser\Node;
use _PhpScopera04bf8e97c06\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera04bf8e97c06\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera04bf8e97c06\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
