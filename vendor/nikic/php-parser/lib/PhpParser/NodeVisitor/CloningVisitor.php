<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\NodeVisitor;

use _PhpScoper17bb67c99ade\PhpParser\Node;
use _PhpScoper17bb67c99ade\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper17bb67c99ade\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper17bb67c99ade\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
