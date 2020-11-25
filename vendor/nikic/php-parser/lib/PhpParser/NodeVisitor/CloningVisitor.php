<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\NodeVisitor;

use _PhpScoperd301db66c80c\PhpParser\Node;
use _PhpScoperd301db66c80c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd301db66c80c\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd301db66c80c\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
