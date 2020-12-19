<?php

declare (strict_types=1);
namespace _PhpScoper9f8d5dcff860\PhpParser\NodeVisitor;

use _PhpScoper9f8d5dcff860\PhpParser\Node;
use _PhpScoper9f8d5dcff860\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper9f8d5dcff860\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper9f8d5dcff860\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
