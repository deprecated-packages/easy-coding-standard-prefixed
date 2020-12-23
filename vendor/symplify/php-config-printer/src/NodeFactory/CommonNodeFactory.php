<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoper14cb6de5473d\PhpParser\BuilderHelpers;
use _PhpScoper14cb6de5473d\PhpParser\Node\Expr;
use _PhpScoper14cb6de5473d\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper14cb6de5473d\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper14cb6de5473d\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper14cb6de5473d\PhpParser\Node\Name;
use _PhpScoper14cb6de5473d\PhpParser\Node\Name\FullyQualified;
use _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper14cb6de5473d\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper14cb6de5473d\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper14cb6de5473d\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper14cb6de5473d\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper14cb6de5473d\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper14cb6de5473d\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper14cb6de5473d\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper14cb6de5473d\PhpParser\Node\Name('false'));
    }
}
