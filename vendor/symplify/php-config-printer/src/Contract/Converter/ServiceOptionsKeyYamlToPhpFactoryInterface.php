<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
