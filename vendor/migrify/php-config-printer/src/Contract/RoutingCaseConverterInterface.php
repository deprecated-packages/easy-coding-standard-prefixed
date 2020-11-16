<?php

declare (strict_types=1);
namespace _PhpScoper6207116d4311\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper6207116d4311\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper6207116d4311\PhpParser\Node\Stmt\Expression;
}
