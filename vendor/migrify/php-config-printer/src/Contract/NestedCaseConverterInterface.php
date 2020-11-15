<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper64a921a5401b\PhpParser\Node\Stmt\Expression;
interface NestedCaseConverterInterface
{
    public function match(string $rootKey, $subKey) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper64a921a5401b\PhpParser\Node\Stmt\Expression;
}
