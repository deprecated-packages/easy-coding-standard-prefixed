<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf77bffce0320\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
