<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoper4298f97f3cb3\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper4298f97f3cb3\PhpParser\Node\Stmt\Expression;
}
