<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\NodeVisitor;

use _PhpScoper578a67c80b2b\PhpParser\Node;
use _PhpScoper578a67c80b2b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper578a67c80b2b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper578a67c80b2b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
