<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b\PhpParser\NodeVisitor;

use _PhpScoper4d3fa30a680b\PhpParser\Node;
use _PhpScoper4d3fa30a680b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper4d3fa30a680b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper4d3fa30a680b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
