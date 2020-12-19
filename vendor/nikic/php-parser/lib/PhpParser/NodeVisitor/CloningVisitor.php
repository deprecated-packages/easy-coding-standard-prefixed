<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\NodeVisitor;

use _PhpScoperd1a5bf00e83e\PhpParser\Node;
use _PhpScoperd1a5bf00e83e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd1a5bf00e83e\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd1a5bf00e83e\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
