<?php

declare (strict_types=1);
namespace _PhpScoper3639953bb9e5\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper3639953bb9e5\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper3639953bb9e5\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper3639953bb9e5\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
