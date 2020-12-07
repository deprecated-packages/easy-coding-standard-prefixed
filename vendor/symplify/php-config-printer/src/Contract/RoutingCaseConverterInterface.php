<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoper18bd934c069f\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper18bd934c069f\PhpParser\Node\Stmt\Expression;
}
