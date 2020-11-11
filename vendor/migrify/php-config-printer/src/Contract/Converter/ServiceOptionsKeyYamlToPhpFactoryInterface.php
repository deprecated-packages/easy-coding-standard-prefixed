<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper2fe14d6302bc\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
