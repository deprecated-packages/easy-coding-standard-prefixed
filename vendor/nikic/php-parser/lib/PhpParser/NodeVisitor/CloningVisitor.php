<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\NodeVisitor;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
use _PhpScoperdc8fbcd7c69d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperdc8fbcd7c69d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperdc8fbcd7c69d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
