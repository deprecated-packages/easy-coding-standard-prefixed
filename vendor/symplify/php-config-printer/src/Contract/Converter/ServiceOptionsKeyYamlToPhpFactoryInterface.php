<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperda2604e33acb\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperda2604e33acb\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperda2604e33acb\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
