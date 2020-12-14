<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperc64a4ac1af35\PhpParser\BuilderHelpers;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Name;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperc64a4ac1af35\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperc64a4ac1af35\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperc64a4ac1af35\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperc64a4ac1af35\PhpParser\Node\Name('false'));
    }
}
