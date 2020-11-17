<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
