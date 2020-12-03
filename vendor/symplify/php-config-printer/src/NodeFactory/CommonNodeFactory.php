<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperba5852cc6147\PhpParser\BuilderHelpers;
use _PhpScoperba5852cc6147\PhpParser\Node\Expr;
use _PhpScoperba5852cc6147\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperba5852cc6147\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperba5852cc6147\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperba5852cc6147\PhpParser\Node\Name;
use _PhpScoperba5852cc6147\PhpParser\Node\Name\FullyQualified;
use _PhpScoperba5852cc6147\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperba5852cc6147\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperba5852cc6147\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperba5852cc6147\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperba5852cc6147\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperba5852cc6147\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperba5852cc6147\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperba5852cc6147\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperba5852cc6147\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperba5852cc6147\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperba5852cc6147\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperba5852cc6147\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperba5852cc6147\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperba5852cc6147\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperba5852cc6147\PhpParser\Node\Name('false'));
    }
}
