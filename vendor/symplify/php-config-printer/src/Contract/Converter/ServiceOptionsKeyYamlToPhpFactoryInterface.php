<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper56c9df53a081\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper56c9df53a081\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper56c9df53a081\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
