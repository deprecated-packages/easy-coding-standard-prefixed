<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperab9510cd5d97\PhpParser\BuilderHelpers;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperab9510cd5d97\PhpParser\Node\Name;
use _PhpScoperab9510cd5d97\PhpParser\Node\Name\FullyQualified;
use _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperab9510cd5d97\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperab9510cd5d97\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperab9510cd5d97\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperab9510cd5d97\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperab9510cd5d97\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperab9510cd5d97\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperab9510cd5d97\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperab9510cd5d97\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperab9510cd5d97\PhpParser\Node\Name('false'));
    }
}
