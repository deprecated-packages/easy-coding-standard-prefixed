<?php

declare (strict_types=1);
namespace _PhpScoper207eb8f99af3\Migrify\PhpConfigPrinter\Contract\Converter;

use _PhpScoper207eb8f99af3\PhpParser\Node\Expr\MethodCall;
interface ServiceOptionsKeyYamlToPhpFactoryInterface
{
    public function decorateServiceMethodCall($key, $yaml, $values, \_PhpScoper207eb8f99af3\PhpParser\Node\Expr\MethodCall $serviceMethodCall) : \_PhpScoper207eb8f99af3\PhpParser\Node\Expr\MethodCall;
    public function isMatch($key, $values) : bool;
}
