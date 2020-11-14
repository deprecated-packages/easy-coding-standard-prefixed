<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper229e8121cf9f\PhpParser\BuilderHelpers;
use _PhpScoper229e8121cf9f\PhpParser\Node\Expr;
use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper229e8121cf9f\PhpParser\Node\Name;
use _PhpScoper229e8121cf9f\PhpParser\Node\Name\FullyQualified;
use _PhpScoper229e8121cf9f\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper229e8121cf9f\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr
    {
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper229e8121cf9f\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper229e8121cf9f\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper229e8121cf9f\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper229e8121cf9f\PhpParser\Node\Name('false'));
    }
}
