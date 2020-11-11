<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper0f5cd390c37a\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper0f5cd390c37a\PhpParser\Node\Stmt\Expression;
}
