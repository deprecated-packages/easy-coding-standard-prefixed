<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper70072c07b02b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
