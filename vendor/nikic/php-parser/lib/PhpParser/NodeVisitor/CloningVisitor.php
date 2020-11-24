<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24\PhpParser\NodeVisitor;

use _PhpScoperbd5fb781fe24\PhpParser\Node;
use _PhpScoperbd5fb781fe24\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperbd5fb781fe24\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperbd5fb781fe24\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
