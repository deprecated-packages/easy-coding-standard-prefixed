<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera061b8a47e36\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera061b8a47e36\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera061b8a47e36\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
