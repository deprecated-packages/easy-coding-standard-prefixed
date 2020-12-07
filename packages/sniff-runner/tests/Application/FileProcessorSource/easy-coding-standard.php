<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use _PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper18bd934c069f\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
};
