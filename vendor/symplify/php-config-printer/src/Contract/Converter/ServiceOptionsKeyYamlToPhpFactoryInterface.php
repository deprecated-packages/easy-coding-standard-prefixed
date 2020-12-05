<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
