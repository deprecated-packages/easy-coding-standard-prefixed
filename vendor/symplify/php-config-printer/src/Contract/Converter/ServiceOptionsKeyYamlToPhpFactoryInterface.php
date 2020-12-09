<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
