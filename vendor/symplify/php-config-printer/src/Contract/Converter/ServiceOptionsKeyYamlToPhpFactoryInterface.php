<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfb2c402b972b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfb2c402b972b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
