<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Name;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Name('false'));
    }
}
