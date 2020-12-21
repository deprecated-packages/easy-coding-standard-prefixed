<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb730595bc9f4\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb730595bc9f4\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb730595bc9f4\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
