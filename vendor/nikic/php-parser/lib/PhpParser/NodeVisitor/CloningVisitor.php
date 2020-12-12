<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\NodeVisitor;

use _PhpScoperdaf95aff095b\PhpParser\Node;
use _PhpScoperdaf95aff095b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperdaf95aff095b\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperdaf95aff095b\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
