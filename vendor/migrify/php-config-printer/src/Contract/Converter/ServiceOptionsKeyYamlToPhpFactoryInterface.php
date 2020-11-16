<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperedc2e0c967db\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
