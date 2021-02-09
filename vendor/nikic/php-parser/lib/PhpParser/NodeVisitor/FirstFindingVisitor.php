<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\NodeVisitor;

use _PhpScoper807f8e74693b\PhpParser\Node;
use _PhpScoper807f8e74693b\PhpParser\NodeTraverser;
use _PhpScoper807f8e74693b\PhpParser\NodeVisitorAbstract;
/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
class FirstFindingVisitor extends \_PhpScoper807f8e74693b\PhpParser\NodeVisitorAbstract
{
    /** @var callable Filter callback */
    protected $filterCallback;
    /** @var null|Node Found node */
    protected $foundNode;
    public function __construct(callable $filterCallback)
    {
        $this->filterCallback = $filterCallback;
    }
    /**
     * Get found node satisfying the filter callback.
     *
     * Returns null if no node satisfies the filter callback.
     *
     * @return null|Node Found node (or null if not found)
     */
    public function getFoundNode()
    {
        return $this->foundNode;
    }
    public function beforeTraverse(array $nodes)
    {
        $this->foundNode = null;
        return null;
    }
    public function enterNode(\_PhpScoper807f8e74693b\PhpParser\Node $node)
    {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNode = $node;
            return \_PhpScoper807f8e74693b\PhpParser\NodeTraverser::STOP_TRAVERSAL;
        }
        return null;
    }
}
