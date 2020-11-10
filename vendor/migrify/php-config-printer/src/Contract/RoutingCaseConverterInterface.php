<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract;

use _PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScopere5e7dca8c031\PhpParser\Node\Stmt\Expression;
}
