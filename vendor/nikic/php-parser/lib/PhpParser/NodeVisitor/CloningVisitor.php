<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\NodeVisitor;

use _PhpScoperb2e2c0c42e71\PhpParser\Node;
use _PhpScoperb2e2c0c42e71\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb2e2c0c42e71\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb2e2c0c42e71\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
