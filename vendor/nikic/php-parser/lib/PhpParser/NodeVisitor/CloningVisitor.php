<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\NodeVisitor;

use _PhpScoperb26833cc184d\PhpParser\Node;
use _PhpScoperb26833cc184d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperb26833cc184d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperb26833cc184d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
