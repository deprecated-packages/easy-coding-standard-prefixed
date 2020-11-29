<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopercae980ebf12d\PhpParser\BuilderHelpers;
use _PhpScopercae980ebf12d\PhpParser\Node\Expr;
use _PhpScopercae980ebf12d\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopercae980ebf12d\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopercae980ebf12d\PhpParser\Node\Expr\ConstFetch;
use _PhpScopercae980ebf12d\PhpParser\Node\Name;
use _PhpScopercae980ebf12d\PhpParser\Node\Name\FullyQualified;
use _PhpScopercae980ebf12d\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopercae980ebf12d\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopercae980ebf12d\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopercae980ebf12d\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopercae980ebf12d\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopercae980ebf12d\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopercae980ebf12d\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopercae980ebf12d\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopercae980ebf12d\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopercae980ebf12d\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopercae980ebf12d\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopercae980ebf12d\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopercae980ebf12d\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopercae980ebf12d\PhpParser\Node\Expr\ConstFetch(new \_PhpScopercae980ebf12d\PhpParser\Node\Name('false'));
    }
}
