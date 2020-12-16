<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitor;

use _PhpScoperc75fd40d7a6e\PhpParser\Node;
use _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperc75fd40d7a6e\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
