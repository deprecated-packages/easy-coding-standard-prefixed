<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser;

/**
 * @codeCoverageIgnore
 */
class NodeVisitorAbstract implements \_PhpScopercae980ebf12d\PhpParser\NodeVisitor
{
    public function beforeTraverse(array $nodes)
    {
        return null;
    }
    public function enterNode(\_PhpScopercae980ebf12d\PhpParser\Node $node)
    {
        return null;
    }
    public function leaveNode(\_PhpScopercae980ebf12d\PhpParser\Node $node)
    {
        return null;
    }
    public function afterTraverse(array $nodes)
    {
        return null;
    }
}
