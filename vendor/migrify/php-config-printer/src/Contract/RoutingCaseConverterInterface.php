<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper64a921a5401b\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper64a921a5401b\PhpParser\Node\Stmt\Expression;
}
