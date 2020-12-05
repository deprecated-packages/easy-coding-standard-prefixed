<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperaba240c3d5f1\PhpParser\BuilderHelpers;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Name;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Name\FullyQualified;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperaba240c3d5f1\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperaba240c3d5f1\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperaba240c3d5f1\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperaba240c3d5f1\PhpParser\Node\Name('false'));
    }
}
