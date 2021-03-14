<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfb0714773dc5\PhpParser\BuilderHelpers;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfb0714773dc5\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfb0714773dc5\PhpParser\Node\Name;
use _PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfb0714773dc5\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfb0714773dc5\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfb0714773dc5\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfb0714773dc5\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfb0714773dc5\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfb0714773dc5\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfb0714773dc5\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfb0714773dc5\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfb0714773dc5\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfb0714773dc5\PhpParser\Node\Name('false'));
    }
}
