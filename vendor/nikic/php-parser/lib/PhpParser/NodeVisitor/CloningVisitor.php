<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\NodeVisitor;

use _PhpScoperda2604e33acb\PhpParser\Node;
use _PhpScoperda2604e33acb\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperda2604e33acb\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperda2604e33acb\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
