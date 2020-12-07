<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
