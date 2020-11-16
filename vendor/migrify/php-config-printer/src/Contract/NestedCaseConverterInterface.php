<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt\Expression;
}
