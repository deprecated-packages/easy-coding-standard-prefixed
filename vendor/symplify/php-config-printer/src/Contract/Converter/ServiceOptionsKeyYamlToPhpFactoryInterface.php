<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera51a90153f58\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera51a90153f58\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera51a90153f58\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
