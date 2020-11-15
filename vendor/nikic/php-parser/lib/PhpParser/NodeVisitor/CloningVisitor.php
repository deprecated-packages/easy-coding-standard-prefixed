<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\NodeVisitor;

use _PhpScoper279cf54b77ad\PhpParser\Node;
use _PhpScoper279cf54b77ad\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper279cf54b77ad\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper279cf54b77ad\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
