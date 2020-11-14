<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract;

use _PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Expression;
}
