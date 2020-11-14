<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr
    {
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Name('false'));
    }
}
