<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper745103eaabcd\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper745103eaabcd\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper745103eaabcd\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
