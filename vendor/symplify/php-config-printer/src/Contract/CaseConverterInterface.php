<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoper4298f97f3cb3\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoper4298f97f3cb3\PhpParser\Node\Stmt\Expression;
}
