<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoper839420027581\PhpParser\BuilderHelpers;
use _PhpScoper839420027581\PhpParser\Node\Expr;
use _PhpScoper839420027581\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper839420027581\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper839420027581\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper839420027581\PhpParser\Node\Name;
use _PhpScoper839420027581\PhpParser\Node\Name\FullyQualified;
use _PhpScoper839420027581\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper839420027581\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper839420027581\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper839420027581\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper839420027581\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper839420027581\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper839420027581\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper839420027581\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper839420027581\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper839420027581\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper839420027581\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper839420027581\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper839420027581\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper839420027581\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper839420027581\PhpParser\Node\Name('false'));
    }
}
