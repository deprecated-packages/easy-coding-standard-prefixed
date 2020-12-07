<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScopereb8678af2407\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScopereb8678af2407\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScopereb8678af2407\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
