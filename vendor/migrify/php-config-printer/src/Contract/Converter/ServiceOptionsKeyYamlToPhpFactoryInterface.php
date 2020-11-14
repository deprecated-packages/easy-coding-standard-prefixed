<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera749ac204cd2\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
