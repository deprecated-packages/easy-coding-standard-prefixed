<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper807f8e74693b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper807f8e74693b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper807f8e74693b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
