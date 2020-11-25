<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
