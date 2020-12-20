<?php

declare (strict_types=1);
namespace _PhpScoper967d20dce97a\PhpParser\NodeVisitor;

use _PhpScoper967d20dce97a\PhpParser\Node;
use _PhpScoper967d20dce97a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper967d20dce97a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper967d20dce97a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
