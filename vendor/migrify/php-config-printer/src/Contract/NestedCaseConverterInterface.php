<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper2fe14d6302bc\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper2fe14d6302bc\PhpParser\Node\Stmt\Expression;
}
