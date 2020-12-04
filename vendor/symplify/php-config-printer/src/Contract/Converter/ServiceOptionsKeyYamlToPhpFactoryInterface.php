<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc233426b15e0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc233426b15e0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc233426b15e0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
