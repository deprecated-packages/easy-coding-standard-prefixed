<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\NodeVisitor;

use _PhpScoperfd70a7e8e84f\PhpParser\Node;
use _PhpScoperfd70a7e8e84f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfd70a7e8e84f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfd70a7e8e84f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
