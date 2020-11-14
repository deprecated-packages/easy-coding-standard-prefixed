<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
