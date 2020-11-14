<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Name;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperddde3ba4aebc\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperddde3ba4aebc\PhpParser\Node\Name('false'));
    }
}
