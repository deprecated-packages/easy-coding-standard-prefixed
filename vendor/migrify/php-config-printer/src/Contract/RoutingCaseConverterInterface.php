<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract;

use _PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression;
interface RoutingCaseConverterInterface
{
    public function match(string $key, $values) : bool;
    public function convertToMethodCall(string $key, $values) : \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt\Expression;
}
