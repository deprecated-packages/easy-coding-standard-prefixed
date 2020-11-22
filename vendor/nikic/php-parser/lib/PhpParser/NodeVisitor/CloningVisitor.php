<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\NodeVisitor;

use _PhpScoperbc5235eb86f3\PhpParser\Node;
use _PhpScoperbc5235eb86f3\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperbc5235eb86f3\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperbc5235eb86f3\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
