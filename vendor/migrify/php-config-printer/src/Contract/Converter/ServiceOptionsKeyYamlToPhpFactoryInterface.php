<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperecb978830f1e\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
