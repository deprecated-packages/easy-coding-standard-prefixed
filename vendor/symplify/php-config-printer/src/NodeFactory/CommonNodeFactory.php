<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperbd5c5a045153\PhpParser\BuilderHelpers;
use _PhpScoperbd5c5a045153\PhpParser\Node\Expr;
use _PhpScoperbd5c5a045153\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperbd5c5a045153\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperbd5c5a045153\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperbd5c5a045153\PhpParser\Node\Name;
use _PhpScoperbd5c5a045153\PhpParser\Node\Name\FullyQualified;
use _PhpScoperbd5c5a045153\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperbd5c5a045153\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperbd5c5a045153\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperbd5c5a045153\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperbd5c5a045153\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperbd5c5a045153\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperbd5c5a045153\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperbd5c5a045153\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperbd5c5a045153\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperbd5c5a045153\PhpParser\Node\Name('false'));
    }
}
