<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\NodeVisitor;

use _PhpScoper167729fa1dde\PhpParser\Node;
use _PhpScoper167729fa1dde\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper167729fa1dde\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper167729fa1dde\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
