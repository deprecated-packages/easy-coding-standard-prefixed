<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper70072c07b02b\PhpParser\Node\Stmt\Expression;
}
