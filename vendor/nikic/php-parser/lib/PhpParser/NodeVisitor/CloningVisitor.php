<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\NodeVisitor;

use _PhpScoperc64a4ac1af35\PhpParser\Node;
use _PhpScoperc64a4ac1af35\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperc64a4ac1af35\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperc64a4ac1af35\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
