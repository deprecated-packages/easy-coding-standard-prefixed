<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopere341acab57d4\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopere341acab57d4\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopere341acab57d4\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
