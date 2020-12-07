<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\NodeVisitor;

use _PhpScoperb83706991c7f\PhpParser\Node;
use _PhpScoperb83706991c7f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb83706991c7f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb83706991c7f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
