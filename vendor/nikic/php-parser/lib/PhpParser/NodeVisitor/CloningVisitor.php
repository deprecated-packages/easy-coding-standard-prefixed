<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\NodeVisitor;

use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb09c3ec8e01a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb09c3ec8e01a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
