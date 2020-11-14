<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper4936962185e7\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper4936962185e7\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper4936962185e7\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
