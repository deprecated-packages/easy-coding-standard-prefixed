<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\NodeVisitor;

use _PhpScoper6db4fde00cda\PhpParser\Node;
use _PhpScoper6db4fde00cda\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper6db4fde00cda\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper6db4fde00cda\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
