<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperfa521053d812\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperfa521053d812\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperfa521053d812\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
