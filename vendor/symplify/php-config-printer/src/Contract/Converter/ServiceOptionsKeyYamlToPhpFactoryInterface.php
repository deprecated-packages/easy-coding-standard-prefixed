<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperb6ccec8ab642\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperb6ccec8ab642\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperb6ccec8ab642\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
