<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\NodeVisitor;

use _PhpScoperba5852cc6147\PhpParser\Node;
use _PhpScoperba5852cc6147\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperba5852cc6147\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperba5852cc6147\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
