<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Name;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Name\FullyQualified;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperbc5235eb86f3\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperbc5235eb86f3\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperbc5235eb86f3\PhpParser\Node\Name('false'));
    }
}
