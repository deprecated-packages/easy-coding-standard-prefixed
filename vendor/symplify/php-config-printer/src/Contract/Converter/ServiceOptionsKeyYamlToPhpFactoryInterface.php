<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
