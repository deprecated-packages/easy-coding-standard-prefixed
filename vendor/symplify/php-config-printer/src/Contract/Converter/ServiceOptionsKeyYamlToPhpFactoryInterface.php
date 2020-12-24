<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopere106f9fd4493\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere106f9fd4493\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopere106f9fd4493\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
