<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper0f5cd390c37a\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
