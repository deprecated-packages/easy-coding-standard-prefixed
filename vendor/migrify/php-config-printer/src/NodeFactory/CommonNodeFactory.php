<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperbcc0395698f8\PhpParser\BuilderHelpers;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperbcc0395698f8\PhpParser\Node\Name;
use _PhpScoperbcc0395698f8\PhpParser\Node\Name\FullyQualified;
use _PhpScoperbcc0395698f8\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperbcc0395698f8\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperbcc0395698f8\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperbcc0395698f8\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperbcc0395698f8\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperbcc0395698f8\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperbcc0395698f8\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperbcc0395698f8\PhpParser\Node\Name('false'));
    }
}
