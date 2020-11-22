<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperbc5235eb86f3\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperbc5235eb86f3\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
