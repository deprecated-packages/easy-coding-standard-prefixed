<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopera189153e1f79\PhpParser\BuilderHelpers;
use _PhpScopera189153e1f79\PhpParser\Node\Expr;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera189153e1f79\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera189153e1f79\PhpParser\Node\Name;
use _PhpScopera189153e1f79\PhpParser\Node\Name\FullyQualified;
use _PhpScopera189153e1f79\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera189153e1f79\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera189153e1f79\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera189153e1f79\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera189153e1f79\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera189153e1f79\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera189153e1f79\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera189153e1f79\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera189153e1f79\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera189153e1f79\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera189153e1f79\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera189153e1f79\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera189153e1f79\PhpParser\Node\Name('false'));
    }
}
