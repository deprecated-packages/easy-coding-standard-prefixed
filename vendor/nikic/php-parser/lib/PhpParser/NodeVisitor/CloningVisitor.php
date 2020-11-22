<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\NodeVisitor;

use _PhpScoperc5bee3a837bb\PhpParser\Node;
use _PhpScoperc5bee3a837bb\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperc5bee3a837bb\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperc5bee3a837bb\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
