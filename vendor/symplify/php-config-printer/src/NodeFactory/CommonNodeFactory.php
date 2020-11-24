<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Name;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Name('false'));
    }
}
