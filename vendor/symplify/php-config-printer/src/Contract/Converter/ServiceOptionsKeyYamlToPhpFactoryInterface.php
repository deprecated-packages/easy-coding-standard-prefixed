<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc8b83ee8976a\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
