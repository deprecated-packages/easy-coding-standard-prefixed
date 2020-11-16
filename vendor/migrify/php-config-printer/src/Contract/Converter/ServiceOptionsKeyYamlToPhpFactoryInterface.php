<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperdf6a0b341030\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
