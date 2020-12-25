<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\NodeVisitor;

use _PhpScoper745103eaabcd\PhpParser\Node;
use _PhpScoper745103eaabcd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper745103eaabcd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper745103eaabcd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
