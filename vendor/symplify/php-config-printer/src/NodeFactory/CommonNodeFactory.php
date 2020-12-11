<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperea337ed74749\PhpParser\BuilderHelpers;
use _PhpScoperea337ed74749\PhpParser\Node\Expr;
use _PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperea337ed74749\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperea337ed74749\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperea337ed74749\PhpParser\Node\Name;
use _PhpScoperea337ed74749\PhpParser\Node\Name\FullyQualified;
use _PhpScoperea337ed74749\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperea337ed74749\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperea337ed74749\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperea337ed74749\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperea337ed74749\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperea337ed74749\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperea337ed74749\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperea337ed74749\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperea337ed74749\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperea337ed74749\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperea337ed74749\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperea337ed74749\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperea337ed74749\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperea337ed74749\PhpParser\Node\Name('false'));
    }
}
