<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfcee700af3df\PhpParser\BuilderHelpers;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfcee700af3df\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfcee700af3df\PhpParser\Node\Name;
use _PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfcee700af3df\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfcee700af3df\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfcee700af3df\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfcee700af3df\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfcee700af3df\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfcee700af3df\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfcee700af3df\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfcee700af3df\PhpParser\Node\Name('false'));
    }
}
