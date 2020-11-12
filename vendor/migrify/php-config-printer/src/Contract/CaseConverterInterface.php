<?php

declare (strict_types=1);
namespace _PhpScoper3d6b50c3ca2f\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper3d6b50c3ca2f\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper3d6b50c3ca2f\PhpParser\Node\Stmt\Expression;
}
