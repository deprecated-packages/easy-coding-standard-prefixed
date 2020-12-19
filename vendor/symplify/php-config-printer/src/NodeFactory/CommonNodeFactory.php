<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera6f918786d5c\PhpParser\BuilderHelpers;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera6f918786d5c\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera6f918786d5c\PhpParser\Node\Name;
use _PhpScopera6f918786d5c\PhpParser\Node\Name\FullyQualified;
use _PhpScopera6f918786d5c\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera6f918786d5c\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera6f918786d5c\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera6f918786d5c\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera6f918786d5c\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera6f918786d5c\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera6f918786d5c\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera6f918786d5c\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera6f918786d5c\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera6f918786d5c\PhpParser\Node\Name('false'));
    }
}
