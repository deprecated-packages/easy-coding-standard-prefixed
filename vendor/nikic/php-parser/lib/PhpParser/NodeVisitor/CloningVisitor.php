<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\NodeVisitor;

use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperba24099fc6fd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperba24099fc6fd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
