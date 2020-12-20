<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name;
use _PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified;
use _PhpScoperba24099fc6fd\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperba24099fc6fd\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperba24099fc6fd\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperba24099fc6fd\PhpParser\Node\Name('false'));
    }
}
