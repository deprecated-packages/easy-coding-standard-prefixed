<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper836bc32aecc2\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper836bc32aecc2\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper836bc32aecc2\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
