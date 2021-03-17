<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\NodeVisitor;

use _PhpScoper842c7347e6be\PhpParser\Node;
use _PhpScoper842c7347e6be\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper842c7347e6be\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper842c7347e6be\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
