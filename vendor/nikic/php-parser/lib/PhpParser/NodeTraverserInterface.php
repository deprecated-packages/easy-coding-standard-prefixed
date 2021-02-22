<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser;

interface NodeTraverserInterface
{
    /**
     * Adds a visitor.
     *
     * @param NodeVisitor $visitor Visitor to add
     */
    public function addVisitor(\_PhpScoperfcee700af3df\PhpParser\NodeVisitor $visitor);
    /**
     * Removes an added visitor.
     *
     * @param NodeVisitor $visitor
     */
    public function removeVisitor(\_PhpScoperfcee700af3df\PhpParser\NodeVisitor $visitor);
    /**
     * Traverses an array of nodes using the registered visitors.
     *
     * @param Node[] $nodes Array of nodes
     *
     * @return Node[] Traversed array of nodes
     */
    public function traverse(array $nodes) : array;
}
