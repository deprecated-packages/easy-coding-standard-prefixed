<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitor;

use _PhpScoperc75fd40d7a6e\PhpParser\Node;
use _PhpScoperc75fd40d7a6e\PhpParser\NodeTraverser;
use _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract;
/**
 * This visitor can be used to find the first node satisfying some criterion determined by
 * a filter callback.
 */
class FirstFindingVisitor extends \_PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract
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
    public function enterNode(\_PhpScoperc75fd40d7a6e\PhpParser\Node $node)
    {
        $filterCallback = $this->filterCallback;
        if ($filterCallback($node)) {
            $this->foundNode = $node;
            return \_PhpScoperc75fd40d7a6e\PhpParser\NodeTraverser::STOP_TRAVERSAL;
        }
        return null;
    }
}
