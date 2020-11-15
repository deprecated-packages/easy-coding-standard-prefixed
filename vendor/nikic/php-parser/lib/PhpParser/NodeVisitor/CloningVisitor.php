<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\NodeVisitor;

use _PhpScoperd9c3b46af121\PhpParser\Node;
use _PhpScoperd9c3b46af121\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd9c3b46af121\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd9c3b46af121\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
