<?php

declare (strict_types=1);
namespace _PhpScoperf62d28230928\PhpParser\NodeVisitor;

use _PhpScoperf62d28230928\PhpParser\Node;
use _PhpScoperf62d28230928\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperf62d28230928\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperf62d28230928\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
