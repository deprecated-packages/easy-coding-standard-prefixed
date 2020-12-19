<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfb2c402b972b\PhpParser\BuilderHelpers;
use _PhpScoperfb2c402b972b\PhpParser\Node\Expr;
use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfb2c402b972b\PhpParser\Node\Name;
use _PhpScoperfb2c402b972b\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfb2c402b972b\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfb2c402b972b\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfb2c402b972b\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfb2c402b972b\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfb2c402b972b\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfb2c402b972b\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfb2c402b972b\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfb2c402b972b\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfb2c402b972b\PhpParser\Node\Name('false'));
    }
}
