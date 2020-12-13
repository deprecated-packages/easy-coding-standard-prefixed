<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\NodeVisitor;

use _PhpScoperd3d57724c802\PhpParser\Node;
use _PhpScoperd3d57724c802\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd3d57724c802\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd3d57724c802\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
