<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper9ef667a5e42c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper9ef667a5e42c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper9ef667a5e42c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
