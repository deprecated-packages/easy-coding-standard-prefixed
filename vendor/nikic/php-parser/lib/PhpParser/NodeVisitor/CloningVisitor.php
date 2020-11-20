<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\PhpParser\NodeVisitor;

use _PhpScoperb6d4bd368bd9\PhpParser\Node;
use _PhpScoperb6d4bd368bd9\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb6d4bd368bd9\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb6d4bd368bd9\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
