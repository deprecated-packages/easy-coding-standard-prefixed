<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\NodeVisitor;

use _PhpScoper418afc2f157c\PhpParser\Node;
use _PhpScoper418afc2f157c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper418afc2f157c\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper418afc2f157c\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
