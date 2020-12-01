<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperad68e34a80c5\PhpParser\BuilderHelpers;
use _PhpScoperad68e34a80c5\PhpParser\Node\Expr;
use _PhpScoperad68e34a80c5\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperad68e34a80c5\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperad68e34a80c5\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperad68e34a80c5\PhpParser\Node\Name;
use _PhpScoperad68e34a80c5\PhpParser\Node\Name\FullyQualified;
use _PhpScoperad68e34a80c5\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperad68e34a80c5\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperad68e34a80c5\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperad68e34a80c5\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperad68e34a80c5\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperad68e34a80c5\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperad68e34a80c5\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperad68e34a80c5\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperad68e34a80c5\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperad68e34a80c5\PhpParser\Node\Name('false'));
    }
}
