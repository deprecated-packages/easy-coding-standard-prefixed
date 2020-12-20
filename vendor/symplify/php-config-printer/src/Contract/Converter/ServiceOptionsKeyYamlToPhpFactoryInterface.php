<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopere205696a9dd6\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere205696a9dd6\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopere205696a9dd6\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
