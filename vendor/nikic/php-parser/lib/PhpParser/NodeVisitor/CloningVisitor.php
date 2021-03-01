<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\NodeVisitor;

use _PhpScoper06c5fb6c14ed\PhpParser\Node;
use _PhpScoper06c5fb6c14ed\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper06c5fb6c14ed\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper06c5fb6c14ed\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
