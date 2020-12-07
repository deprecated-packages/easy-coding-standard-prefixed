<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperda2604e33acb\PhpParser\BuilderHelpers;
use _PhpScoperda2604e33acb\PhpParser\Node\Expr;
use _PhpScoperda2604e33acb\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperda2604e33acb\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperda2604e33acb\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperda2604e33acb\PhpParser\Node\Name;
use _PhpScoperda2604e33acb\PhpParser\Node\Name\FullyQualified;
use _PhpScoperda2604e33acb\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperda2604e33acb\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperda2604e33acb\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperda2604e33acb\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperda2604e33acb\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperda2604e33acb\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperda2604e33acb\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperda2604e33acb\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperda2604e33acb\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperda2604e33acb\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperda2604e33acb\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperda2604e33acb\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperda2604e33acb\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperda2604e33acb\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperda2604e33acb\PhpParser\Node\Name('false'));
    }
}
