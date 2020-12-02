<?php

declare (strict_types=1);
namespace _PhpScoperfaaf57618f34\PhpParser\NodeVisitor;

use _PhpScoperfaaf57618f34\PhpParser\Node;
use _PhpScoperfaaf57618f34\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfaaf57618f34\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfaaf57618f34\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
