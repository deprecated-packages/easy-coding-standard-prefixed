<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper065e4ba46e6d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper065e4ba46e6d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper065e4ba46e6d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
