<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\NodeVisitor;

use _PhpScoperfd70a7e8e84f\PhpParser\Node;
use _PhpScoperfd70a7e8e84f\PhpParser\NodeTraverser;
use _PhpScoperfd70a7e8e84f\PhpParser\NodeVisitorAbstract;
/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
class FirstFindingVisitor extends \_PhpScoperfd70a7e8e84f\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperfd70a7e8e84f\PhpParser\Node $node)
    {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNode = $node;
            return \_PhpScoperfd70a7e8e84f\PhpParser\NodeTraverser::STOP_TRAVERSAL;
        }
        return null;
    }
}
