<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\NodeVisitor;

use _PhpScoper246d3630afdd\PhpParser\Node;
use _PhpScoper246d3630afdd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper246d3630afdd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper246d3630afdd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
