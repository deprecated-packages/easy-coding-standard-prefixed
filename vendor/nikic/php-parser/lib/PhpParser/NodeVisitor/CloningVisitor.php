<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899\PhpParser\NodeVisitor;

use _PhpScoper64e7ad844899\PhpParser\Node;
use _PhpScoper64e7ad844899\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper64e7ad844899\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper64e7ad844899\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
