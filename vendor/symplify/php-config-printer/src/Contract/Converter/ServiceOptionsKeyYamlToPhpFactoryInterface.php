<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf7b66f9e3817\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf7b66f9e3817\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf7b66f9e3817\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
