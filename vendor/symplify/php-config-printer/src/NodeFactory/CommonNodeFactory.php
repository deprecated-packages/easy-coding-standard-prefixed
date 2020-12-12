<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\NodeFactory;

use _PhpScoperef870243cfdb\PhpParser\BuilderHelpers;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperef870243cfdb\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperef870243cfdb\PhpParser\Node\Name;
use _PhpScoperef870243cfdb\PhpParser\Node\Name\FullyQualified;
use _PhpScoperef870243cfdb\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperef870243cfdb\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperef870243cfdb\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperef870243cfdb\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperef870243cfdb\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperef870243cfdb\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperef870243cfdb\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperef870243cfdb\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperef870243cfdb\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperef870243cfdb\PhpParser\Node\Name('false'));
    }
}
