<?php

declare (strict_types=1);
namespace _PhpScoper6ae4c4f86624;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScoper6ae4c4f86624\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScoper6ae4c4f86624\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
