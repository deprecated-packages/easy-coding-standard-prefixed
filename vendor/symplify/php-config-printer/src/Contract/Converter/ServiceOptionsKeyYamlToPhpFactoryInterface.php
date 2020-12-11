<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc7c7dddc9238\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc7c7dddc9238\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc7c7dddc9238\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
