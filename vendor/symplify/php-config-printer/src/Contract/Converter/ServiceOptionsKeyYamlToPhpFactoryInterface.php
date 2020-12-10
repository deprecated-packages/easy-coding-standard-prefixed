<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
