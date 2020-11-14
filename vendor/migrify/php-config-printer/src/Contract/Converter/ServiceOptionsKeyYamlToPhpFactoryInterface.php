<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
