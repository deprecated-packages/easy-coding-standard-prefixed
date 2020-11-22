<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera88a8b9f064a\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
