<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper0c236037eb04\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper0c236037eb04\PhpParser\Node\Stmt\Expression;
}
