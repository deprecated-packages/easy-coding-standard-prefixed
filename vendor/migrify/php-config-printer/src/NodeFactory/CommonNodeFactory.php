<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperedc2e0c967db\PhpParser\BuilderHelpers;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified;
use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperedc2e0c967db\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperedc2e0c967db\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperedc2e0c967db\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperedc2e0c967db\PhpParser\Node\Name('false'));
    }
}
