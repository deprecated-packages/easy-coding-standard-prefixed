<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera9d6b451df71\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
