<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfcee700af3df\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfcee700af3df\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfcee700af3df\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
