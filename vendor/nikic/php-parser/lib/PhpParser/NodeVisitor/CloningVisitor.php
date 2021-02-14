<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser\NodeVisitor;

use _PhpScoper89c09b8e7101\PhpParser\Node;
use _PhpScoper89c09b8e7101\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper89c09b8e7101\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper89c09b8e7101\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
