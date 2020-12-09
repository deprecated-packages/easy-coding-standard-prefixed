<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\NodeVisitor;

use _PhpScoper7f5523334c1b\PhpParser\Node;
use _PhpScoper7f5523334c1b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper7f5523334c1b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper7f5523334c1b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
