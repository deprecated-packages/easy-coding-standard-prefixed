<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser\NodeVisitor;

use _PhpScoperf65af7a6d9a0\PhpParser\Node;
use _PhpScoperf65af7a6d9a0\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperf65af7a6d9a0\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperf65af7a6d9a0\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
