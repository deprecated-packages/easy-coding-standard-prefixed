<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\PhpParser\NodeVisitor;

use _PhpScoper3d6b50c3ca2f\PhpParser\Node;
use _PhpScoper3d6b50c3ca2f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper3d6b50c3ca2f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper3d6b50c3ca2f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
