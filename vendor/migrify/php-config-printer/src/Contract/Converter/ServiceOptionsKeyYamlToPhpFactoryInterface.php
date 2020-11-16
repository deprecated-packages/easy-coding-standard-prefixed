<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
