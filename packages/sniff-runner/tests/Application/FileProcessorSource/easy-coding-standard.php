<?php

declare (strict_types=1);
namespace _PhpScopercf327c47dfc5;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff::class);
};
