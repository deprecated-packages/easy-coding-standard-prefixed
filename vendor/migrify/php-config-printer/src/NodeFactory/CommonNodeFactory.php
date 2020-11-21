<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopera4be459e5e3d\PhpParser\BuilderHelpers;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera4be459e5e3d\PhpParser\Node\Name;
use _PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified;
use _PhpScopera4be459e5e3d\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera4be459e5e3d\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera4be459e5e3d\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera4be459e5e3d\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera4be459e5e3d\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera4be459e5e3d\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera4be459e5e3d\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera4be459e5e3d\PhpParser\Node\Name('false'));
    }
}
