<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper229e8121cf9f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
