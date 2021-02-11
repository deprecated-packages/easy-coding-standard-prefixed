<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperef5048aa2573\PhpParser\BuilderHelpers;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperef5048aa2573\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperef5048aa2573\PhpParser\Node\Name;
use _PhpScoperef5048aa2573\PhpParser\Node\Name\FullyQualified;
use _PhpScoperef5048aa2573\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperef5048aa2573\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperef5048aa2573\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperef5048aa2573\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperef5048aa2573\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperef5048aa2573\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperef5048aa2573\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperef5048aa2573\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperef5048aa2573\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperef5048aa2573\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperef5048aa2573\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperef5048aa2573\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperef5048aa2573\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperef5048aa2573\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperef5048aa2573\PhpParser\Node\Name('false'));
    }
}
