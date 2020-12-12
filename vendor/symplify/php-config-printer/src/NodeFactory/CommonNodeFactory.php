<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperdaf95aff095b\PhpParser\BuilderHelpers;
use _PhpScoperdaf95aff095b\PhpParser\Node\Expr;
use _PhpScoperdaf95aff095b\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperdaf95aff095b\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperdaf95aff095b\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperdaf95aff095b\PhpParser\Node\Name;
use _PhpScoperdaf95aff095b\PhpParser\Node\Name\FullyQualified;
use _PhpScoperdaf95aff095b\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperdaf95aff095b\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperdaf95aff095b\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperdaf95aff095b\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperdaf95aff095b\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperdaf95aff095b\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperdaf95aff095b\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperdaf95aff095b\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperdaf95aff095b\PhpParser\Node\Name('false'));
    }
}
