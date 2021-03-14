<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopere050faf861e6\PhpParser\BuilderHelpers;
use _PhpScopere050faf861e6\PhpParser\Node\Expr;
use _PhpScopere050faf861e6\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopere050faf861e6\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopere050faf861e6\PhpParser\Node\Expr\ConstFetch;
use _PhpScopere050faf861e6\PhpParser\Node\Name;
use _PhpScopere050faf861e6\PhpParser\Node\Name\FullyQualified;
use _PhpScopere050faf861e6\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopere050faf861e6\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopere050faf861e6\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopere050faf861e6\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopere050faf861e6\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopere050faf861e6\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopere050faf861e6\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopere050faf861e6\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopere050faf861e6\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopere050faf861e6\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopere050faf861e6\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopere050faf861e6\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopere050faf861e6\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopere050faf861e6\PhpParser\Node\Expr\ConstFetch(new \_PhpScopere050faf861e6\PhpParser\Node\Name('false'));
    }
}
