<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoperbcc0395698f8\PhpParser\Node\Stmt\Expression;
}
