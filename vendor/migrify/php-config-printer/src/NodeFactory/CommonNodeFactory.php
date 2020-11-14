<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopercda2b863d098\PhpParser\BuilderHelpers;
use _PhpScopercda2b863d098\PhpParser\Node\Expr;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopercda2b863d098\PhpParser\Node\Expr\ConstFetch;
use _PhpScopercda2b863d098\PhpParser\Node\Name;
use _PhpScopercda2b863d098\PhpParser\Node\Name\FullyQualified;
use _PhpScopercda2b863d098\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopercda2b863d098\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopercda2b863d098\PhpParser\Node\Expr
    {
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopercda2b863d098\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopercda2b863d098\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopercda2b863d098\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopercda2b863d098\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopercda2b863d098\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopercda2b863d098\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopercda2b863d098\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopercda2b863d098\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopercda2b863d098\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopercda2b863d098\PhpParser\Node\Expr\ConstFetch(new \_PhpScopercda2b863d098\PhpParser\Node\Name('false'));
    }
}
