<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
