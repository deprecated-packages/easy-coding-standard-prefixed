<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScopereb8678af2407\PhpParser\BuilderHelpers;
use _PhpScopereb8678af2407\PhpParser\Node\Expr;
use _PhpScopereb8678af2407\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScopereb8678af2407\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScopereb8678af2407\PhpParser\Node\Expr\ConstFetch;
use _PhpScopereb8678af2407\PhpParser\Node\Name;
use _PhpScopereb8678af2407\PhpParser\Node\Name\FullyQualified;
use _PhpScopereb8678af2407\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScopereb8678af2407\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScopereb8678af2407\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScopereb8678af2407\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScopereb8678af2407\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScopereb8678af2407\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScopereb8678af2407\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScopereb8678af2407\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScopereb8678af2407\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScopereb8678af2407\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScopereb8678af2407\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScopereb8678af2407\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScopereb8678af2407\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScopereb8678af2407\PhpParser\Node\Expr\ConstFetch(new \_PhpScopereb8678af2407\PhpParser\Node\Name('false'));
    }
}
