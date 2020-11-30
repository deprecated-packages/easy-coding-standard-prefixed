<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper246d7c16d32f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper246d7c16d32f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper246d7c16d32f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
