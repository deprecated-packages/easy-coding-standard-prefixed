<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972;

use SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff;
use _PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperdeea1786e972\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Variables\UnusedVariableSniff::class);
};
