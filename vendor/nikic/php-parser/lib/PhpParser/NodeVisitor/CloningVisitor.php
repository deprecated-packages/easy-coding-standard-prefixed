<?php

declare (strict_types=1);
namespace _PhpScoper7312d63d356f\PhpParser\NodeVisitor;

use _PhpScoper7312d63d356f\PhpParser\Node;
use _PhpScoper7312d63d356f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper7312d63d356f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper7312d63d356f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
