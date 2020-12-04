<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\NodeVisitor;

use _PhpScopera4fc793dae73\PhpParser\Node;
use _PhpScopera4fc793dae73\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera4fc793dae73\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera4fc793dae73\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
