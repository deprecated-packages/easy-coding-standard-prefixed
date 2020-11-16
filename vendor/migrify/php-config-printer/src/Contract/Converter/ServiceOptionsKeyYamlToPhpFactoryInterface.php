<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper1103e00fb46b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper1103e00fb46b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper1103e00fb46b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
