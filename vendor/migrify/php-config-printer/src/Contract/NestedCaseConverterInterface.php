<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression;
}
