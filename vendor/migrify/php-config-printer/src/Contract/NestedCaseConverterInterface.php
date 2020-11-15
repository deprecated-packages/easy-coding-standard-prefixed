<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract;

use _PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScopercb576ca159b5\PhpParser\Node\Stmt\Expression;
}
