<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper49c742f5a4ee\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
