<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera37d6fb0b1ab\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
