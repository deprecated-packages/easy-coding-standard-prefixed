<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperbaf90856897c\PhpParser\BuilderHelpers;
use _PhpScoperbaf90856897c\PhpParser\Node\Expr;
use _PhpScoperbaf90856897c\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperbaf90856897c\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperbaf90856897c\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperbaf90856897c\PhpParser\Node\Name;
use _PhpScoperbaf90856897c\PhpParser\Node\Name\FullyQualified;
use _PhpScoperbaf90856897c\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperbaf90856897c\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperbaf90856897c\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperbaf90856897c\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperbaf90856897c\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperbaf90856897c\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperbaf90856897c\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperbaf90856897c\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperbaf90856897c\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperbaf90856897c\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperbaf90856897c\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperbaf90856897c\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperbaf90856897c\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperbaf90856897c\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperbaf90856897c\PhpParser\Node\Name('false'));
    }
}
