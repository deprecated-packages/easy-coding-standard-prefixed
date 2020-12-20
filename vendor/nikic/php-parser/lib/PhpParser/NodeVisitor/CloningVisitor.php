<?php

declare (strict_types=1);
namespace _PhpScoper9885c8c176c7\PhpParser\NodeVisitor;

use _PhpScoper9885c8c176c7\PhpParser\Node;
use _PhpScoper9885c8c176c7\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper9885c8c176c7\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper9885c8c176c7\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
