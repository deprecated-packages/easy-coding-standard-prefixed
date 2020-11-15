<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperd9c3b46af121\PhpParser\BuilderHelpers;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperd9c3b46af121\PhpParser\Node\Name;
use _PhpScoperd9c3b46af121\PhpParser\Node\Name\FullyQualified;
use _PhpScoperd9c3b46af121\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperd9c3b46af121\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperd9c3b46af121\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperd9c3b46af121\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperd9c3b46af121\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperd9c3b46af121\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperd9c3b46af121\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperd9c3b46af121\PhpParser\Node\Name('false'));
    }
}
