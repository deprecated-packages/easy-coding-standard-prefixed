<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoper967c4b7e296e\PhpParser\BuilderHelpers;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\ConstFetch;
use _PhpScoper967c4b7e296e\PhpParser\Node\Name;
use _PhpScoper967c4b7e296e\PhpParser\Node\Name\FullyQualified;
use _PhpScoper967c4b7e296e\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoper967c4b7e296e\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoper967c4b7e296e\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoper967c4b7e296e\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoper967c4b7e296e\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoper967c4b7e296e\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoper967c4b7e296e\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\ConstFetch(new \_PhpScoper967c4b7e296e\PhpParser\Node\Name('false'));
    }
}
