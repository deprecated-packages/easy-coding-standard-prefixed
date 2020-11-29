<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopercae980ebf12d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercae980ebf12d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopercae980ebf12d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
