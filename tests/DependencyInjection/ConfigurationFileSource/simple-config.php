<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera34ae19e8d40\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
