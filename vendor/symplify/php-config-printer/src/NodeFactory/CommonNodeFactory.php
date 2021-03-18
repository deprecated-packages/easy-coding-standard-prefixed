<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperf53473b45c36\PhpParser\BuilderHelpers;
use _PhpScoperf53473b45c36\PhpParser\Node\Expr;
use _PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperf53473b45c36\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperf53473b45c36\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperf53473b45c36\PhpParser\Node\Name;
use _PhpScoperf53473b45c36\PhpParser\Node\Name\FullyQualified;
use _PhpScoperf53473b45c36\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperf53473b45c36\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperf53473b45c36\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperf53473b45c36\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperf53473b45c36\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperf53473b45c36\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperf53473b45c36\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperf53473b45c36\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperf53473b45c36\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperf53473b45c36\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperf53473b45c36\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperf53473b45c36\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperf53473b45c36\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperf53473b45c36\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperf53473b45c36\PhpParser\Node\Name('false'));
    }
}
