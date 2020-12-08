<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
