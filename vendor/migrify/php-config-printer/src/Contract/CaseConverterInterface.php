<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper2a8ad010dfbd\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Stmt\Expression;
}
