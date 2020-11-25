<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper418afc2f157c\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper418afc2f157c\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper418afc2f157c\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
