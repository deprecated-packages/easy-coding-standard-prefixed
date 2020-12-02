<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperfaaf57618f34\PhpParser\BuilderHelpers;
use _PhpScoperfaaf57618f34\PhpParser\Node\Expr;
use _PhpScoperfaaf57618f34\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperfaaf57618f34\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperfaaf57618f34\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperfaaf57618f34\PhpParser\Node\Name;
use _PhpScoperfaaf57618f34\PhpParser\Node\Name\FullyQualified;
use _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperfaaf57618f34\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperfaaf57618f34\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperfaaf57618f34\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperfaaf57618f34\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperfaaf57618f34\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperfaaf57618f34\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperfaaf57618f34\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperfaaf57618f34\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperfaaf57618f34\PhpParser\Node\Name('false'));
    }
}
