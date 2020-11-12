<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper7cef7256eba6\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper7cef7256eba6\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper7cef7256eba6\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
