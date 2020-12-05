<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642\PhpParser\NodeVisitor;

use _PhpScoperb6ccec8ab642\PhpParser\Node;
use _PhpScoperb6ccec8ab642\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb6ccec8ab642\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb6ccec8ab642\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
