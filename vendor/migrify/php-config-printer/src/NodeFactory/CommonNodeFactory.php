<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper49c742f5a4ee\PhpParser\BuilderHelpers;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Name;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Name\FullyQualified;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper49c742f5a4ee\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper49c742f5a4ee\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper49c742f5a4ee\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper49c742f5a4ee\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper49c742f5a4ee\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper49c742f5a4ee\PhpParser\Node\Name('false'));
    }
}
