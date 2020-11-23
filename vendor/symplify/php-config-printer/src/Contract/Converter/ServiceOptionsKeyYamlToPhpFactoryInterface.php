<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper59558822d8c7\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper59558822d8c7\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper59558822d8c7\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
