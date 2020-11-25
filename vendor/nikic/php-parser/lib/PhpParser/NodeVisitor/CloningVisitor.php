<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\NodeVisitor;

use _PhpScoperca8ca183ac38\PhpParser\Node;
use _PhpScoperca8ca183ac38\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperca8ca183ac38\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperca8ca183ac38\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
