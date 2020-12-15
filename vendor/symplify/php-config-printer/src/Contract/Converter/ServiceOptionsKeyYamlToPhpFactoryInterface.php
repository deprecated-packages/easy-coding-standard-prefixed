<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperdeea1786e972\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperdeea1786e972\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperdeea1786e972\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
