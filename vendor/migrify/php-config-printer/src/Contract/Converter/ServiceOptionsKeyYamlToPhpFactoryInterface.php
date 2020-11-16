<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4d05106cc3c0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4d05106cc3c0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4d05106cc3c0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
