<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\NodeVisitor;

use _PhpScoperad4605bb9267\PhpParser\Node;
use _PhpScoperad4605bb9267\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperad4605bb9267\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperad4605bb9267\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
