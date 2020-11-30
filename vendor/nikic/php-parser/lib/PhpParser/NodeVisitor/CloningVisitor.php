<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\NodeVisitor;

use _PhpScopera09818bc50da\PhpParser\Node;
use _PhpScopera09818bc50da\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera09818bc50da\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera09818bc50da\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
