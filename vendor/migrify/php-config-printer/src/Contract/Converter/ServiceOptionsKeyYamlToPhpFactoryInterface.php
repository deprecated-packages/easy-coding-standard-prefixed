<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc753ccca5a0c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
