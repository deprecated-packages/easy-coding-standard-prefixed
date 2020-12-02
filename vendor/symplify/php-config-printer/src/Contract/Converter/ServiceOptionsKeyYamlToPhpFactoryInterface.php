<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper992f4af8b9e0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper992f4af8b9e0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper992f4af8b9e0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
