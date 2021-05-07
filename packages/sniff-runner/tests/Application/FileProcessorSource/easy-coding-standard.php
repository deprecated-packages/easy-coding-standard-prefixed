<?php

declare (strict_types=1);
namespace _PhpScopercae9e6ab5cea;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use _PhpScopercae9e6ab5cea\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DisallowLongArraySyntaxSniff::class);
};
