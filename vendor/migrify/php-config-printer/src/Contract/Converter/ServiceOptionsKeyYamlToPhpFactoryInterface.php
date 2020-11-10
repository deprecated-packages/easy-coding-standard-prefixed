<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper666af036e800\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
