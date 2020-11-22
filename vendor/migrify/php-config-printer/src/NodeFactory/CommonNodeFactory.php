<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfacc742d2745\PhpParser\BuilderHelpers;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfacc742d2745\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfacc742d2745\PhpParser\Node\Name;
use _PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfacc742d2745\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfacc742d2745\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfacc742d2745\PhpParser\Node\Name('false'));
    }
}
