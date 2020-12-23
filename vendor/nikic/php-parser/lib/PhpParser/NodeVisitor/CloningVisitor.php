<?php

declare (strict_types=1);
namespace _PhpScoper14cb6de5473d\PhpParser\NodeVisitor;

use _PhpScoper14cb6de5473d\PhpParser\Node;
use _PhpScoper14cb6de5473d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper14cb6de5473d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper14cb6de5473d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
