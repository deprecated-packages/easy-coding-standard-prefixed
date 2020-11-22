<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper5ade29b97028\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper5ade29b97028\PhpParser\Node\Stmt\Expression;
}
