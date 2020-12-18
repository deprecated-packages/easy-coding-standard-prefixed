<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper4d3fa30a680b\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
