<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\NodeVisitor;

use _PhpScoperef870243cfdb\PhpParser\Node;
use _PhpScoperef870243cfdb\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperef870243cfdb\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperef870243cfdb\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
