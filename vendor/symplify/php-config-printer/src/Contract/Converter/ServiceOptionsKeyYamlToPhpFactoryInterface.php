<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfd70a7e8e84f\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
