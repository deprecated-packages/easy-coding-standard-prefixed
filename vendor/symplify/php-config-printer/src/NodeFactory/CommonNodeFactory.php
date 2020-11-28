<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfcce67077a55\PhpParser\BuilderHelpers;
use _PhpScoperfcce67077a55\PhpParser\Node\Expr;
use _PhpScoperfcce67077a55\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfcce67077a55\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfcce67077a55\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfcce67077a55\PhpParser\Node\Name;
use _PhpScoperfcce67077a55\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfcce67077a55\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfcce67077a55\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfcce67077a55\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfcce67077a55\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfcce67077a55\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfcce67077a55\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfcce67077a55\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfcce67077a55\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfcce67077a55\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfcce67077a55\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfcce67077a55\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfcce67077a55\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfcce67077a55\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfcce67077a55\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfcce67077a55\PhpParser\Node\Name('false'));
    }
}
