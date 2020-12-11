<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\NodeVisitor;

use _PhpScopere4fa57261c04\PhpParser\Node;
use _PhpScopere4fa57261c04\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopere4fa57261c04\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopere4fa57261c04\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
