<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfcf15c26e033\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfcf15c26e033\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
