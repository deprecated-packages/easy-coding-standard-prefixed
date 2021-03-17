<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487;

use SlevomatCodingStandard\Sniffs\Files\LineLengthSniff;
use _PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
return static function (\_PhpScopera3425146d487\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\SlevomatCodingStandard\Sniffs\Files\LineLengthSniff::class);
};
