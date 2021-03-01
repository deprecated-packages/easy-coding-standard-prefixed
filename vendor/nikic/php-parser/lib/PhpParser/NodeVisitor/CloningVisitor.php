<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\NodeVisitor;

use _PhpScoperf3dc21757def\PhpParser\Node;
use _PhpScoperf3dc21757def\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperf3dc21757def\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperf3dc21757def\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
