<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper4936962185e7\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper4936962185e7\PhpParser\Node\Stmt\Expression;
}
