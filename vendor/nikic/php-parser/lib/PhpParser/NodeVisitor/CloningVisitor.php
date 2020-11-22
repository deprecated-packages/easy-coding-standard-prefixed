<?php

declare (strict_types=1);
namespace _PhpScoperac4e86be08e5\PhpParser\NodeVisitor;

use _PhpScoperac4e86be08e5\PhpParser\Node;
use _PhpScoperac4e86be08e5\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperac4e86be08e5\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperac4e86be08e5\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
