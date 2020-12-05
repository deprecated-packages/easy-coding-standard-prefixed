<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\NodeVisitor;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node;
use _PhpScoper81b3ff5ab9fe\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper81b3ff5ab9fe\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper81b3ff5ab9fe\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
