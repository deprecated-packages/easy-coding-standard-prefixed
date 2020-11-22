<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\NodeVisitor;

use _PhpScoper3fa05b4669af\PhpParser\Node;
use _PhpScoper3fa05b4669af\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper3fa05b4669af\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper3fa05b4669af\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
