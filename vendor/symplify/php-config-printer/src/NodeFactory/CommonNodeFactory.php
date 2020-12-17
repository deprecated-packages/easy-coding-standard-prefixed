<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopercf909b66eba8\PhpParser\BuilderHelpers;
use _PhpScopercf909b66eba8\PhpParser\Node\Expr;
use _PhpScopercf909b66eba8\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopercf909b66eba8\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopercf909b66eba8\PhpParser\Node\Expr\ConstFetch;
use _PhpScopercf909b66eba8\PhpParser\Node\Name;
use _PhpScopercf909b66eba8\PhpParser\Node\Name\FullyQualified;
use _PhpScopercf909b66eba8\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopercf909b66eba8\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopercf909b66eba8\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopercf909b66eba8\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopercf909b66eba8\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopercf909b66eba8\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopercf909b66eba8\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopercf909b66eba8\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopercf909b66eba8\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopercf909b66eba8\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopercf909b66eba8\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopercf909b66eba8\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopercf909b66eba8\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopercf909b66eba8\PhpParser\Node\Expr\ConstFetch(new \_PhpScopercf909b66eba8\PhpParser\Node\Name('false'));
    }
}
