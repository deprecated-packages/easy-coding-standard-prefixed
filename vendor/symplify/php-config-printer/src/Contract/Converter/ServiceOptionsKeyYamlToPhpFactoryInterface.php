<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4d3fa30a680b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4d3fa30a680b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4d3fa30a680b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
