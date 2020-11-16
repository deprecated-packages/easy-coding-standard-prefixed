<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Expression;
}
