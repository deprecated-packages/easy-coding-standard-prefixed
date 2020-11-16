<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
