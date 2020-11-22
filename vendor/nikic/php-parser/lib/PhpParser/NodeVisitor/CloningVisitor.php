<?php

declare (strict_types=1);
namespace _PhpScoper797695bcfb1f\PhpParser\NodeVisitor;

use _PhpScoper797695bcfb1f\PhpParser\Node;
use _PhpScoper797695bcfb1f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper797695bcfb1f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper797695bcfb1f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
