<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoperaba240c3d5f1\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
