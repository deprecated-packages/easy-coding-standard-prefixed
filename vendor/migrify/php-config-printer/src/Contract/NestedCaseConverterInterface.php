<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Expression;
}
