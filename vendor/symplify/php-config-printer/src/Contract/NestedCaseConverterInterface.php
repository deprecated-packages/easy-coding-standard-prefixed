<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Expression;
}
