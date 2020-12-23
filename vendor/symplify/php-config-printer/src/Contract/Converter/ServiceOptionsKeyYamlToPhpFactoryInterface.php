<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper14cb6de5473d\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper14cb6de5473d\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
