<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\NodeFactory;

use _PhpScoperecb978830f1e\PhpParser\BuilderHelpers;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\BinaryOp\Concat;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoperecb978830f1e\PhpParser\Node\Expr\ConstFetch;
use _PhpScoperecb978830f1e\PhpParser\Node\Name;
use _PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified;
use _PhpScoperecb978830f1e\PhpParser\Node\Scalar\MagicConst\Dir;
use _PhpScoperecb978830f1e\PhpParser\Node\Scalar\String_;
final class CommonNodeFactory
{
    public function createAbsoluteDirExpr($argument) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr
    {
        if ($argument === '') {
            return new \_PhpScoperecb978830f1e\PhpParser\Node\Scalar\String_('');
        }
        if (\is_string($argument)) {
            // preslash with dir
            $argument = '/' . $argument;
        }
        $argumentValue = \_PhpScoperecb978830f1e\PhpParser\BuilderHelpers::normalizeValue($argument);
        if ($argumentValue instanceof \_PhpScoperecb978830f1e\PhpParser\Node\Scalar\String_) {
            $argumentValue = new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\BinaryOp\Concat(new \_PhpScoperecb978830f1e\PhpParser\Node\Scalar\MagicConst\Dir(), $argumentValue);
        }
        return $argumentValue;
    }
    public function createClassReference(string $className) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\ClassConstFetch
    {
        return $this->createConstFetch($className, 'class');
    }
    public function createConstFetch(string $className, string $constantName) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\ClassConstFetch
    {
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\ClassConstFetch(new \_PhpScoperecb978830f1e\PhpParser\Node\Name\FullyQualified($className), $constantName);
    }
    public function createFalse() : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\ConstFetch
    {
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Expr\ConstFetch(new \_PhpScoperecb978830f1e\PhpParser\Node\Name('false'));
    }
}
