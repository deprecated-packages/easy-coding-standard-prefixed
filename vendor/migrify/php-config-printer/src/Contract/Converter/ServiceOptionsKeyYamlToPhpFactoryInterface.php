<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopera4be459e5e3d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
