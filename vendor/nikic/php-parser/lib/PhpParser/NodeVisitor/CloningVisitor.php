<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser\NodeVisitor;

use _PhpScoperf3db63c305b2\PhpParser\Node;
use _PhpScoperf3db63c305b2\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperf3db63c305b2\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperf3db63c305b2\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
