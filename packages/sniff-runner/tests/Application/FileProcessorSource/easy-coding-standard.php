<?php

declare (strict_types=1);
namespace _PhpScoper96c81c3c1716;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use _PhpScoper96c81c3c1716\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DisallowLongArraySyntaxSniff::class);
};
