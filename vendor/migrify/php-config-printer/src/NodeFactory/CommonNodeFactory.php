<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopercb576ca159b5\PhpParser\BuilderHelpers;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopercb576ca159b5\PhpParser\Node\Expr\ConstFetch;
use _PhpScopercb576ca159b5\PhpParser\Node\Name;
use _PhpScopercb576ca159b5\PhpParser\Node\Name\FullyQualified;
use _PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopercb576ca159b5\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopercb576ca159b5\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopercb576ca159b5\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopercb576ca159b5\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopercb576ca159b5\PhpParser\Node\Expr\ConstFetch(new \_PhpScopercb576ca159b5\PhpParser\Node\Name('false'));
    }
}
