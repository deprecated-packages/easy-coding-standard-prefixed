<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperac4e86be08e5\PhpParser\BuilderHelpers;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperac4e86be08e5\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperac4e86be08e5\PhpParser\Node\Name;
use _PhpScoperac4e86be08e5\PhpParser\Node\Name\FullyQualified;
use _PhpScoperac4e86be08e5\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperac4e86be08e5\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperac4e86be08e5\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperac4e86be08e5\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperac4e86be08e5\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperac4e86be08e5\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperac4e86be08e5\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperac4e86be08e5\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperac4e86be08e5\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperac4e86be08e5\PhpParser\Node\Name('false'));
    }
}
