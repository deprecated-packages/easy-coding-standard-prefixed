<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper0270f1d35181\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper0270f1d35181\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper0270f1d35181\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
