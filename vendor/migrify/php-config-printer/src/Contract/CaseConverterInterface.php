<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt\Expression;
}
