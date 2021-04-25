<?php

declare (strict_types=1);
namespace _PhpScoperff1e514762b4;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\DisallowLongArraySyntaxSniff;
use _PhpScoperff1e514762b4\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(DisallowLongArraySyntaxSniff::class);
};
