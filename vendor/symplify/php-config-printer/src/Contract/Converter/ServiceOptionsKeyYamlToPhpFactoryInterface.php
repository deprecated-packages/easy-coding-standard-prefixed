<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper776637f3d3c3\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper776637f3d3c3\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper776637f3d3c3\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
