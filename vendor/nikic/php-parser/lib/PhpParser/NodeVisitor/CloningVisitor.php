<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\NodeVisitor;

use _PhpScoper5928e324b45e\PhpParser\Node;
use _PhpScoper5928e324b45e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoper5928e324b45e\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoper5928e324b45e\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
