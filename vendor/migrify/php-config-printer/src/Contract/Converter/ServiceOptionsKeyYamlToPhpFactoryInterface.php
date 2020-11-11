<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4f985154d5a0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
