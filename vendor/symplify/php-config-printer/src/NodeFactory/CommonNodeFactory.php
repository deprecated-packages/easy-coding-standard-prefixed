<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperc5bee3a837bb\PhpParser\BuilderHelpers;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Name;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Name\FullyQualified;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperc5bee3a837bb\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperc5bee3a837bb\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperc5bee3a837bb\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperc5bee3a837bb\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperc5bee3a837bb\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperc5bee3a837bb\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperc5bee3a837bb\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperc5bee3a837bb\PhpParser\Node\Name('false'));
    }
}