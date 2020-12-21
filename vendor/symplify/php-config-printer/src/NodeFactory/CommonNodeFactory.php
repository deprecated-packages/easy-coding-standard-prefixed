<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfcf15c26e033\PhpParser\BuilderHelpers;
use _PhpScoperfcf15c26e033\PhpParser\Node\Expr;
use _PhpScoperfcf15c26e033\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfcf15c26e033\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfcf15c26e033\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfcf15c26e033\PhpParser\Node\Name;
use _PhpScoperfcf15c26e033\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfcf15c26e033\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfcf15c26e033\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfcf15c26e033\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfcf15c26e033\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfcf15c26e033\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfcf15c26e033\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfcf15c26e033\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfcf15c26e033\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfcf15c26e033\PhpParser\Node\Name('false'));
    }
}
