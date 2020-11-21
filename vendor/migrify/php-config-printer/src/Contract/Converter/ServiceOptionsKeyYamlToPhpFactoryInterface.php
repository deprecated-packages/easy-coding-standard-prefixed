<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper224ae0b86670\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
