<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Expression;
}
