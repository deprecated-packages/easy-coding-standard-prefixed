<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper5a9febfbbe05\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper5a9febfbbe05\PhpParser\Node\Stmt\Expression;
}
