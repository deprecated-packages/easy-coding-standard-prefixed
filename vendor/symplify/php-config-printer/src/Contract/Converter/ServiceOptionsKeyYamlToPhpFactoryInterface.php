<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperbd5fb781fe24\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbd5fb781fe24\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperbd5fb781fe24\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
