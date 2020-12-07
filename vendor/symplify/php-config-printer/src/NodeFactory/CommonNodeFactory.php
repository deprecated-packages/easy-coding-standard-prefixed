<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfa521053d812\PhpParser\BuilderHelpers;
use _PhpScoperfa521053d812\PhpParser\Node\Expr;
use _PhpScoperfa521053d812\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfa521053d812\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfa521053d812\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfa521053d812\PhpParser\Node\Name;
use _PhpScoperfa521053d812\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfa521053d812\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfa521053d812\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfa521053d812\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfa521053d812\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfa521053d812\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfa521053d812\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfa521053d812\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfa521053d812\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfa521053d812\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfa521053d812\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfa521053d812\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfa521053d812\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfa521053d812\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfa521053d812\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfa521053d812\PhpParser\Node\Name('false'));
    }
}
