<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Expression;
}
