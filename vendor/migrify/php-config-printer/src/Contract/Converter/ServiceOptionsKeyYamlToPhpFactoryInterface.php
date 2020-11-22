<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper5ade29b97028\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper5ade29b97028\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper5ade29b97028\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
