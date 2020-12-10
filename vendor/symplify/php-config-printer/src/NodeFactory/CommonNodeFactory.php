<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopera40fc53e636b\PhpParser\BuilderHelpers;
use _PhpScopera40fc53e636b\PhpParser\Node\Expr;
use _PhpScopera40fc53e636b\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopera40fc53e636b\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopera40fc53e636b\PhpParser\Node\Expr\ConstFetch;
use _PhpScopera40fc53e636b\PhpParser\Node\Name;
use _PhpScopera40fc53e636b\PhpParser\Node\Name\FullyQualified;
use _PhpScopera40fc53e636b\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopera40fc53e636b\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopera40fc53e636b\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopera40fc53e636b\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopera40fc53e636b\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopera40fc53e636b\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopera40fc53e636b\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopera40fc53e636b\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopera40fc53e636b\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopera40fc53e636b\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopera40fc53e636b\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopera40fc53e636b\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopera40fc53e636b\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopera40fc53e636b\PhpParser\Node\Expr\ConstFetch(new \_PhpScopera40fc53e636b\PhpParser\Node\Name('false'));
    }
}
