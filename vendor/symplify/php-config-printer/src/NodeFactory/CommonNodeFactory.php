<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopere341acab57d4\PhpParser\BuilderHelpers;
use _PhpScopere341acab57d4\PhpParser\Node\Expr;
use _PhpScopere341acab57d4\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopere341acab57d4\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopere341acab57d4\PhpParser\Node\Expr\ConstFetch;
use _PhpScopere341acab57d4\PhpParser\Node\Name;
use _PhpScopere341acab57d4\PhpParser\Node\Name\FullyQualified;
use _PhpScopere341acab57d4\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopere341acab57d4\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopere341acab57d4\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopere341acab57d4\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopere341acab57d4\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopere341acab57d4\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopere341acab57d4\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopere341acab57d4\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopere341acab57d4\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopere341acab57d4\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopere341acab57d4\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopere341acab57d4\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopere341acab57d4\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopere341acab57d4\PhpParser\Node\Expr\ConstFetch(new \_PhpScopere341acab57d4\PhpParser\Node\Name('false'));
    }
}
