<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
