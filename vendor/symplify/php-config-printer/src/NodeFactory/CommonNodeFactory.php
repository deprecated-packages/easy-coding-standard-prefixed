<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperdf15f2b748e9\PhpParser\BuilderHelpers;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Name;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperdf15f2b748e9\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperdf15f2b748e9\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperdf15f2b748e9\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperdf15f2b748e9\PhpParser\Node\Name('false'));
    }
}
