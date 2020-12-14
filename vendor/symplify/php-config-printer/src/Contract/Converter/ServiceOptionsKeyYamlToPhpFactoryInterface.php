<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
