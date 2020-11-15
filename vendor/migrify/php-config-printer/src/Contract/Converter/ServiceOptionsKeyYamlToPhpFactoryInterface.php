<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper64a921a5401b\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
