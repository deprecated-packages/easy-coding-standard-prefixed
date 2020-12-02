<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf62d28230928\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf62d28230928\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf62d28230928\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
