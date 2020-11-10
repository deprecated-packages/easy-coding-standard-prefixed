<?php

declare (strict_types=1);
namespace _PhpScopere5e7dca8c031\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopere5e7dca8c031\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
