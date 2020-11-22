<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera88a8b9f064a\PhpParser\BuilderHelpers;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera88a8b9f064a\PhpParser\Node\Name;
use _PhpScopera88a8b9f064a\PhpParser\Node\Name\FullyQualified;
use _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera88a8b9f064a\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera88a8b9f064a\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera88a8b9f064a\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera88a8b9f064a\PhpParser\Node\Name('false'));
    }
}
