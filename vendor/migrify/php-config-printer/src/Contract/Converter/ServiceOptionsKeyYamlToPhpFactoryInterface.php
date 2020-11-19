<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper63567e560066\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
