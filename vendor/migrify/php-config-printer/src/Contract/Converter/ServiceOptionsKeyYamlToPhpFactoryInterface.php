<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper279cf54b77ad\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
