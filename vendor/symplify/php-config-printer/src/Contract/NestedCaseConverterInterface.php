<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt\Expression;
}
