<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\NodeVisitor;

use _PhpScoperaad82bb90a86\PhpParser\Node;
use _PhpScoperaad82bb90a86\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperaad82bb90a86\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperaad82bb90a86\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
