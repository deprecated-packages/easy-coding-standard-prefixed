<?php

declare (strict_types=1);
namespace _PhpScoper6d28bdf6a7f9\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
