<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\NodeVisitor;

use _PhpScoper326af2119eba\PhpParser\Node;
use _PhpScoper326af2119eba\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper326af2119eba\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper326af2119eba\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
