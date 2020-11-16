<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperad4605bb9267\PhpParser\BuilderHelpers;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperad4605bb9267\PhpParser\Node\Name;
use _PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified;
use _PhpScoperad4605bb9267\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperad4605bb9267\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperad4605bb9267\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperad4605bb9267\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperad4605bb9267\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperad4605bb9267\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperad4605bb9267\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperad4605bb9267\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperad4605bb9267\PhpParser\Node\Name('false'));
    }
}
