<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\NodeVisitor;

use _PhpScoper807f8e74693b\PhpParser\Node;
use _PhpScoper807f8e74693b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper807f8e74693b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper807f8e74693b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
