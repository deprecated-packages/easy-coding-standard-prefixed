<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
}
