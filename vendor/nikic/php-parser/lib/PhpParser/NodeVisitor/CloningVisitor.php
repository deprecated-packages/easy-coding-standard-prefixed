<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\NodeVisitor;

use _PhpScopercda2b863d098\PhpParser\Node;
use _PhpScopercda2b863d098\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopercda2b863d098\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopercda2b863d098\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
