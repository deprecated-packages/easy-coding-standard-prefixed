<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\NodeVisitor;

use _PhpScoper66292c14b658\PhpParser\Node;
use _PhpScoper66292c14b658\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper66292c14b658\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper66292c14b658\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
