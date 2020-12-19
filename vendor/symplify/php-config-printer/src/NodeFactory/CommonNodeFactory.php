<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera8f555a7493c\PhpParser\BuilderHelpers;
use _PhpScopera8f555a7493c\PhpParser\Node\Expr;
use _PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera8f555a7493c\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera8f555a7493c\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera8f555a7493c\PhpParser\Node\Name;
use _PhpScopera8f555a7493c\PhpParser\Node\Name\FullyQualified;
use _PhpScopera8f555a7493c\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera8f555a7493c\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera8f555a7493c\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera8f555a7493c\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera8f555a7493c\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera8f555a7493c\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera8f555a7493c\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera8f555a7493c\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera8f555a7493c\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera8f555a7493c\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera8f555a7493c\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera8f555a7493c\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera8f555a7493c\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera8f555a7493c\PhpParser\Node\Name('false'));
    }
}
