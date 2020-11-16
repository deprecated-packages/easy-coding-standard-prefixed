<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
}
