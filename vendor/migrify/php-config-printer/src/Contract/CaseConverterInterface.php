<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper836bc32aecc2\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper836bc32aecc2\PhpParser\Node\Stmt\Expression;
}
