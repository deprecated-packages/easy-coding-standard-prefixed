<?php

declare (strict_types=1);
namespace _PhpScoper0c236037eb04\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper0c236037eb04\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
