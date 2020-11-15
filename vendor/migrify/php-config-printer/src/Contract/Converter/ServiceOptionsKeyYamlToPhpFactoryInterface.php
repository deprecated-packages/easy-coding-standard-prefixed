<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera189153e1f79\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
