<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperdf6a0b341030\PhpParser\BuilderHelpers;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperdf6a0b341030\PhpParser\Node\Name;
use _PhpScoperdf6a0b341030\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperdf6a0b341030\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperdf6a0b341030\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperdf6a0b341030\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperdf6a0b341030\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperdf6a0b341030\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperdf6a0b341030\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperdf6a0b341030\PhpParser\Node\Name('false'));
    }
}
