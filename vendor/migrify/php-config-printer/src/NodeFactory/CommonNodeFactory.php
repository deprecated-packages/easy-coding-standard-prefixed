<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperc753ccca5a0c\PhpParser\BuilderHelpers;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Name;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperc753ccca5a0c\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperc753ccca5a0c\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperc753ccca5a0c\PhpParser\Node\Name('false'));
    }
}
