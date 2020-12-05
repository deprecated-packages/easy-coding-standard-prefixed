<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperc83f84c90b60\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperc83f84c90b60\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperc83f84c90b60\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
