<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper2a8ad010dfbd\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
