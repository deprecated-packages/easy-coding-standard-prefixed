<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper967c4b7e296e\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
