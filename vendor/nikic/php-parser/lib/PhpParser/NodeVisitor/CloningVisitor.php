<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\PhpParser\NodeVisitor;

use _PhpScoper967c4b7e296e\PhpParser\Node;
use _PhpScoper967c4b7e296e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper967c4b7e296e\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper967c4b7e296e\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
