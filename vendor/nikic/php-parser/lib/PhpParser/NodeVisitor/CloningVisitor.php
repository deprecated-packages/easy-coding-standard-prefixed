<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\NodeVisitor;

use _PhpScoperfcce67077a55\PhpParser\Node;
use _PhpScoperfcce67077a55\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfcce67077a55\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfcce67077a55\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
