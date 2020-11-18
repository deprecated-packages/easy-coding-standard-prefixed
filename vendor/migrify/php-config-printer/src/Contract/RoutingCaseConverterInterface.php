<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract;

use _PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoperf77bffce0320\PhpParser\Node\Stmt\Expression;
}
