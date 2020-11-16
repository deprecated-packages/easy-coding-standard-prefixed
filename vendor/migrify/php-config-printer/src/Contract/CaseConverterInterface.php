<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper4d05106cc3c0\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper4d05106cc3c0\PhpParser\Node\Stmt\Expression;
}
