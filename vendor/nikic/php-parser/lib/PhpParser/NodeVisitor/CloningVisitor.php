<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\NodeVisitor;

use _PhpScoper49c742f5a4ee\PhpParser\Node;
use _PhpScoper49c742f5a4ee\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper49c742f5a4ee\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper49c742f5a4ee\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
