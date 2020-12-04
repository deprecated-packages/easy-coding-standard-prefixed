<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera04bf8e97c06\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera04bf8e97c06\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
