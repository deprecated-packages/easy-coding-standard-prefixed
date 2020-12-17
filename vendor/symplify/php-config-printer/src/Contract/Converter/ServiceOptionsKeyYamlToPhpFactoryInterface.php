<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopercf909b66eba8\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercf909b66eba8\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopercf909b66eba8\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
