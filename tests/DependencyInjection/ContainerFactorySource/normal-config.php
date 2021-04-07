<?php

declare (strict_types=1);
namespace _PhpScoper9acecd3612c5;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper9acecd3612c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9acecd3612c5\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
