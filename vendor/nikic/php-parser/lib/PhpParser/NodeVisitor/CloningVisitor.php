<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\NodeVisitor;

use _PhpScoper269dc521b0fa\PhpParser\Node;
use _PhpScoper269dc521b0fa\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper269dc521b0fa\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper269dc521b0fa\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
