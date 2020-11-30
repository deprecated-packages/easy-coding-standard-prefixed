<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\NodeVisitor;

use _PhpScoper246d7c16d32f\PhpParser\Node;
use _PhpScoper246d7c16d32f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper246d7c16d32f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper246d7c16d32f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
