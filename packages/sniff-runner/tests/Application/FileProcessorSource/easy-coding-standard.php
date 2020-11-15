<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use _PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera189153e1f79\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
};
