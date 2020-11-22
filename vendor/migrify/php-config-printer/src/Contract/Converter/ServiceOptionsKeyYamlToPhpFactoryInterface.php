<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfacc742d2745\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
