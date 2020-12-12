<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoper04022cd986ec\PhpParser\BuilderHelpers;
use _PhpScoper04022cd986ec\PhpParser\Node\Expr;
use _PhpScoper04022cd986ec\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper04022cd986ec\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper04022cd986ec\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper04022cd986ec\PhpParser\Node\Name;
use _PhpScoper04022cd986ec\PhpParser\Node\Name\FullyQualified;
use _PhpScoper04022cd986ec\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper04022cd986ec\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper04022cd986ec\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper04022cd986ec\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper04022cd986ec\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper04022cd986ec\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper04022cd986ec\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper04022cd986ec\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper04022cd986ec\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper04022cd986ec\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper04022cd986ec\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper04022cd986ec\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper04022cd986ec\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper04022cd986ec\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper04022cd986ec\PhpParser\Node\Name('false'));
    }
}
