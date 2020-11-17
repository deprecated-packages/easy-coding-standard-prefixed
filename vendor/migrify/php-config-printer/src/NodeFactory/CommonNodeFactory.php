<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Name;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Name\FullyQualified;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Name('false'));
    }
}
