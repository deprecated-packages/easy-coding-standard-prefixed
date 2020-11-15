<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper64a921a5401b\PhpParser\BuilderHelpers;
use _PhpScoper64a921a5401b\PhpParser\Node\Expr;
use _PhpScoper64a921a5401b\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper64a921a5401b\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper64a921a5401b\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper64a921a5401b\PhpParser\Node\Name;
use _PhpScoper64a921a5401b\PhpParser\Node\Name\FullyQualified;
use _PhpScoper64a921a5401b\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper64a921a5401b\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper64a921a5401b\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper64a921a5401b\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper64a921a5401b\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper64a921a5401b\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper64a921a5401b\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper64a921a5401b\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper64a921a5401b\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper64a921a5401b\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper64a921a5401b\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper64a921a5401b\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper64a921a5401b\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper64a921a5401b\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper64a921a5401b\PhpParser\Node\Name('false'));
    }
}
