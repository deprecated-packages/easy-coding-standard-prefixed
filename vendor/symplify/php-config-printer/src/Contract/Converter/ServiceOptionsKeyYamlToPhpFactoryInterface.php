<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperbaf90856897c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbaf90856897c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperbaf90856897c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
