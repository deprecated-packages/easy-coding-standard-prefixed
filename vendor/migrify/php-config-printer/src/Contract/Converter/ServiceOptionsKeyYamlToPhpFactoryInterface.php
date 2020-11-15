<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
