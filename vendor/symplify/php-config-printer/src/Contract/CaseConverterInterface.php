<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract;

use _PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Expression;
interface CaseConverterInterface
{
    public function match(string $rootKey, $key, $values) : bool;
    public function convertToMethodCall($key, $values) : \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Expression;
}
