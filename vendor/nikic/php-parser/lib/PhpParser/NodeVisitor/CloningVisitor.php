<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\NodeVisitor;

use _PhpScoperd35c27cd4b09\PhpParser\Node;
use _PhpScoperd35c27cd4b09\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd35c27cd4b09\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd35c27cd4b09\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
