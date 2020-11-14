<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\NodeVisitor;

use _PhpScoperecb978830f1e\PhpParser\Node;
use _PhpScoperecb978830f1e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperecb978830f1e\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperecb978830f1e\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
