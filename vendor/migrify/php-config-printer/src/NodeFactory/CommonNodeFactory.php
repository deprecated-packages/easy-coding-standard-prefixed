<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScopere5e7dca8c031\PhpParser\BuilderHelpers;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\ConstFetch;
use _PhpScopere5e7dca8c031\PhpParser\Node\Name;
use _PhpScopere5e7dca8c031\PhpParser\Node\Name\FullyQualified;
use _PhpScopere5e7dca8c031\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopere5e7dca8c031\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr
    {
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopere5e7dca8c031\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopere5e7dca8c031\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopere5e7dca8c031\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopere5e7dca8c031\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\ConstFetch(new \_PhpScopere5e7dca8c031\PhpParser\Node\Name('false'));
    }
}
