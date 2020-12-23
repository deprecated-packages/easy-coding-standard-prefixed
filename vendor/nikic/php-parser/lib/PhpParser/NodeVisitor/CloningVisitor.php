<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\NodeVisitor;

use _PhpScoperd9fcac9e904f\PhpParser\Node;
use _PhpScoperd9fcac9e904f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd9fcac9e904f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd9fcac9e904f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
