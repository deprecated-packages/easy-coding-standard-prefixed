<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\NodeVisitor;

use _PhpScoper58a0a169dcfb\PhpParser\Node;
use _PhpScoper58a0a169dcfb\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper58a0a169dcfb\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper58a0a169dcfb\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
