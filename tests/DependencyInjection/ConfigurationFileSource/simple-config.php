<?php

declare (strict_types=1);
namespace _PhpScoper9907e2e69ce3;

use PHP_CodeSniffer\Standards\Generic\Sniffs\Arrays\ArrayIndentSniff;
use _PhpScoper9907e2e69ce3\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(ArrayIndentSniff::class);
};
