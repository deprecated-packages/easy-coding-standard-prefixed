<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name\FullyQualified;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name('false'));
    }
}
