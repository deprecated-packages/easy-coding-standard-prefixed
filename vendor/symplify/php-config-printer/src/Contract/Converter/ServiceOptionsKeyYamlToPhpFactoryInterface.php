<?php

declare (strict_types=1);
namespace Symplify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper5f6e904600e7\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    /**
     * @param mixed $key
     * @param mixed $yaml
     * @param mixed $values
     */
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper5f6e904600e7\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper5f6e904600e7\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
