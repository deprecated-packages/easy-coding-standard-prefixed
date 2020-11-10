<?php

declare (strict_types=1);
namespace _PhpScoper48800f361566\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper48800f361566\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
