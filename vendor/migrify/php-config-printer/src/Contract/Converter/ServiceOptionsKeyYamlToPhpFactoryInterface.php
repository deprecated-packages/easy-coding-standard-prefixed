<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperbcc0395698f8\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
