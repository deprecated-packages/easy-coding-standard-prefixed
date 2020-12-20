<?php

declare (strict_types=1);
namespace _PhpScoper9885c8c176c7;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper9885c8c176c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper9885c8c176c7\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
