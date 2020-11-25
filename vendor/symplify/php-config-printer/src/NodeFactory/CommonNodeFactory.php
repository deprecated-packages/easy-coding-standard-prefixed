<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperaa402dd1b1f1\PhpParser\BuilderHelpers;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Name;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Name\FullyQualified;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperaa402dd1b1f1\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperaa402dd1b1f1\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperaa402dd1b1f1\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperaa402dd1b1f1\PhpParser\Node\Name('false'));
    }
}
