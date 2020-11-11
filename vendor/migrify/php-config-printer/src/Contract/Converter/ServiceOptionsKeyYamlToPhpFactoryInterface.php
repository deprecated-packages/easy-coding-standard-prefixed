<?php

declare (strict_types=1);
namespace _PhpScoper06c66bea2cf6\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper06c66bea2cf6\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
