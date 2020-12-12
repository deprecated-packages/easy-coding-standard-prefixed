<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper83b3b9a317c0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper83b3b9a317c0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper83b3b9a317c0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
