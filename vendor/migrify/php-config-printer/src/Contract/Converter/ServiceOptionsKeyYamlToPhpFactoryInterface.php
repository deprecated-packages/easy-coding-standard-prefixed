<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopercb576ca159b5\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
