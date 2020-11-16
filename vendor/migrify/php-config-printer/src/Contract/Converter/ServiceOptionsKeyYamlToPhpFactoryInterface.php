<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper239b374a39c8\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
