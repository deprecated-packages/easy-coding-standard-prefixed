<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper7faa8deb0d3c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
