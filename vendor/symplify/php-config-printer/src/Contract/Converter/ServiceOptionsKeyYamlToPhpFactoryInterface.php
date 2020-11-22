<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper16399a42e87c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper16399a42e87c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper16399a42e87c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
