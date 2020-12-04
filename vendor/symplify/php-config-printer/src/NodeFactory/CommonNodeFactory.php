<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera04bf8e97c06\PhpParser\BuilderHelpers;
use _PhpScopera04bf8e97c06\PhpParser\Node\Expr;
use _PhpScopera04bf8e97c06\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera04bf8e97c06\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera04bf8e97c06\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera04bf8e97c06\PhpParser\Node\Name;
use _PhpScopera04bf8e97c06\PhpParser\Node\Name\FullyQualified;
use _PhpScopera04bf8e97c06\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera04bf8e97c06\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera04bf8e97c06\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera04bf8e97c06\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera04bf8e97c06\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera04bf8e97c06\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera04bf8e97c06\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera04bf8e97c06\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera04bf8e97c06\PhpParser\Node\Name('false'));
    }
}
