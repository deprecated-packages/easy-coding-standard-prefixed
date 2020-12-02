<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperc95ae4bf942a\PhpParser\BuilderHelpers;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Name;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperc95ae4bf942a\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperc95ae4bf942a\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperc95ae4bf942a\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperc95ae4bf942a\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperc95ae4bf942a\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperc95ae4bf942a\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperc95ae4bf942a\PhpParser\Node\Name('false'));
    }
}
