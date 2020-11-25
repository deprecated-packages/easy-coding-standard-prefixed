<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperd301db66c80c\PhpParser\BuilderHelpers;
use _PhpScoperd301db66c80c\PhpParser\Node\Expr;
use _PhpScoperd301db66c80c\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperd301db66c80c\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperd301db66c80c\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperd301db66c80c\PhpParser\Node\Name;
use _PhpScoperd301db66c80c\PhpParser\Node\Name\FullyQualified;
use _PhpScoperd301db66c80c\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperd301db66c80c\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperd301db66c80c\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperd301db66c80c\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperd301db66c80c\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperd301db66c80c\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperd301db66c80c\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperd301db66c80c\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperd301db66c80c\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperd301db66c80c\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperd301db66c80c\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperd301db66c80c\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperd301db66c80c\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperd301db66c80c\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperd301db66c80c\PhpParser\Node\Name('false'));
    }
}
