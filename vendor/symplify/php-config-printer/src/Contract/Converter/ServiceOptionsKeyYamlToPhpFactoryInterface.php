<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfcce67077a55\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfcce67077a55\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfcce67077a55\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
