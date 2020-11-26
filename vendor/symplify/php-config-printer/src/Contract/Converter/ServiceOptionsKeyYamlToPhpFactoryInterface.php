<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopercb217fd4e736\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopercb217fd4e736\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopercb217fd4e736\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
