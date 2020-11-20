<?php

declare (strict_types=1);
namespace _PhpScoper5a9febfbbe05\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper5a9febfbbe05\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper5a9febfbbe05\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
