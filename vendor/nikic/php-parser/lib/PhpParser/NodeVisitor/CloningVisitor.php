<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\NodeVisitor;

use _PhpScoperd675aaf00c76\PhpParser\Node;
use _PhpScoperd675aaf00c76\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd675aaf00c76\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd675aaf00c76\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
