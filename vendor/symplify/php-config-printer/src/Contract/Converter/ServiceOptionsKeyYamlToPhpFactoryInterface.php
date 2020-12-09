<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper31ba553edf97\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper31ba553edf97\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper31ba553edf97\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
