<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb6d4bd368bd9\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
