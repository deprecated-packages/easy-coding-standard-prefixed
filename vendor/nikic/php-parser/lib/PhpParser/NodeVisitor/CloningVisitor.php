<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\NodeVisitor;

use _PhpScopera1f11cc38772\PhpParser\Node;
use _PhpScopera1f11cc38772\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera1f11cc38772\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera1f11cc38772\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
