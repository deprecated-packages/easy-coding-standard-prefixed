<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\NodeVisitor;

use _PhpScoper57210e33e43a\PhpParser\Node;
use _PhpScoper57210e33e43a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper57210e33e43a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper57210e33e43a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
