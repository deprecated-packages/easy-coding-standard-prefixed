<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfab1bfb7ec99\PhpParser\BuilderHelpers;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Name;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfab1bfb7ec99\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfab1bfb7ec99\PhpParser\Node\Name('false'));
    }
}
