<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\NodeVisitor;

use _PhpScoper528afa732cbd\PhpParser\Node;
use _PhpScoper528afa732cbd\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper528afa732cbd\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper528afa732cbd\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
