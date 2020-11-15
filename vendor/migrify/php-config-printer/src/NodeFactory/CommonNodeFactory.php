<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper70072c07b02b\PhpParser\BuilderHelpers;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper70072c07b02b\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper70072c07b02b\PhpParser\Node\Name;
use _PhpScoper70072c07b02b\PhpParser\Node\Name\FullyQualified;
use _PhpScoper70072c07b02b\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper70072c07b02b\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper70072c07b02b\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper70072c07b02b\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper70072c07b02b\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper70072c07b02b\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper70072c07b02b\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper70072c07b02b\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper70072c07b02b\PhpParser\Node\Name('false'));
    }
}
