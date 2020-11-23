<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\NodeVisitor;

use _PhpScoperc4b135661b3a\PhpParser\Node;
use _PhpScoperc4b135661b3a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperc4b135661b3a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperc4b135661b3a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
